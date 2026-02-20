<template>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
            <InputLabel for="street" :value="__('translate.Street')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
            <input
                type="text"
                id="street"
                @input="$emit('update:street', $event.target.value)"
                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                :value="street"
                ref="streetRef"
                :placeholder="__('translate.Street')"/>
        </div>
        <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
            <InputLabel for="number" :value="__('translate.Number')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
            <input
                class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                type="text"
                id="number"
                @input="$emit('update:streetNumber', $event.target.value)"
                :value="streetNumber"
                :placeholder="__('translate.Number')"/>
        </div>
        <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
            <InputLabel for="postcode" :value="__('translate.Postal')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
            <input
                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                    type="text"
                    id="postcode"
                    @input="$emit('update:postcode', $event.target.value)"
                    :value="postcode"
                    :placeholder="__('translate.Postal')"/>
        </div>
        <div class="bg-gray-50/50 p-6 rounded-[2rem] border border-gray-100/50">
            <InputLabel for="city" :value="__('translate.City')" class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-2" />
            <input
                    class="w-full px-5 py-4 text-xs rounded-2xl border-gray-100 bg-white focus:bg-white focus:ring-0 focus:border-[#00a0e3] transition-all font-bold tracking-widest uppercase"
                    type="text"
                    id="city"
                    @input="$emit('update:city', $event.target.value)"
                    :value="city"
                    :placeholder="__('translate.City')"/>
        </div>
    </div>
</template>
<script>
import {onMounted, onUnmounted, ref, watch} from "vue";
import TextInput from "@/Components/TextInput.vue";
import InputLabel from "@/Components/InputLabel.vue";
export default {
    components: {InputLabel, TextInput},
    props: {
        code: {
            type: String,
            default: '',
        },
        street: {
            type: String,
            default: '',
        },
        streetNumber: {
            type: String,
            default: '',
        },
        postcode: {
            type: String,
            default: '',
        },
        city: {
            type: String,
            default: '',
        }
    },
    setup(props, context) {
        const streetRef = ref();
        let autocomplete;
        const autocompleteFunc = () => {
            autocomplete = new google.maps.places.Autocomplete(streetRef.value, {
                types: ["address"],
                componentRestrictions: {country: props.code},
                fields: ["address_components"]
            });
            google.maps.event.addListener(autocomplete, "place_changed", () => {
                const mapping = {
                    street_number: "update:streetNumber",
                    route: "update:street",
                    locality: "update:city",
                    postal_code: "update:postcode",
                }
                for(const type in mapping) {
                    context.emit(mapping[type], "");
                }

                let place = {
                    address_components: [],
                    ...autocomplete.getPlace()
                }

                place.address_components.forEach((component) => {
                    component.types.forEach((type) => {
                        if(mapping.hasOwnProperty(type)){
                            context.emit(mapping[type], component.long_name);
                        }
                    });
                });
            });
        }

        watch(() => props.code, async () => {
            if(autocomplete){
                let options  = {
                    types: ["address"],
                    componentRestrictions: {country: props.code},
                    fields: ["address_components"]
                }
                autocomplete.setOptions(options);
            }
        });

        onMounted(() => {
            autocompleteFunc();
        });

        onUnmounted(() => {
            if(autocomplete) {
                google.maps.event.clearInstanceListeners(autocomplete);
            }
        });

        return {streetRef};
    }
};
</script>
