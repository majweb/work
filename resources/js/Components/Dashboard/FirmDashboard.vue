<template>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="flex items-center justify-between mb-8 px-4">
            <div>
                <h3 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                    {{ __('translate.firmDashboard') }}
                </h3>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                    {{ __('translate.firmDashboardDescription') || 'Zarządzaj swoją firmą i rekrutacjami' }}
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- KAFEL 1 -->
            <Link :href="route('recruits.index')" class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 hover:-translate-y-2 p-10 text-center cursor-pointer relative overflow-hidden flex flex-col items-center justify-center min-h-[180px]">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50/50 rounded-full -mr-12 -mt-12 blur-2xl group-hover:bg-blue-100/50 transition-colors"></div>
                <div class="text-5xl font-black text-[#0A2C5C] group-hover:scale-110 transition-transform duration-500 relative z-10">
                    {{ recruitsCount }}
                </div>
                <div class="mt-3 text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 group-hover:text-[#00a0e3] transition-colors relative z-10">
                    {{ __('translate.recruiterCount') }}
                </div>
            </Link>

            <!-- KAFEL 2 -->
            <Link :href="route('projects.index')" class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 hover:-translate-y-2 p-10 text-center cursor-pointer relative overflow-hidden flex flex-col items-center justify-center min-h-[180px]">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50/50 rounded-full -mr-12 -mt-12 blur-2xl group-hover:bg-blue-100/50 transition-colors"></div>
                <div class="text-5xl font-black text-[#0A2C5C] group-hover:scale-110 transition-transform duration-500 relative z-10">
                    {{ projectsCount }}
                </div>
                <div class="mt-3 text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 group-hover:text-[#00a0e3] transition-colors relative z-10">
                    {{ __('translate.projectCountStat') }}
                </div>
            </Link>

            <!-- KAFEL 3 -->
            <Link :href="route('aplications.index')" class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 hover:-translate-y-2 p-10 text-center cursor-pointer relative overflow-hidden flex flex-col items-center justify-center min-h-[180px]">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50/50 rounded-full -mr-12 -mt-12 blur-2xl group-hover:bg-blue-100/50 transition-colors"></div>
                <div class="text-5xl font-black text-[#0A2C5C] group-hover:scale-110 transition-transform duration-500 relative z-10">
                    {{ aplicationCount }}
                </div>
                <div class="mt-3 text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 group-hover:text-[#00a0e3] transition-colors relative z-10">
                    {{ __('translate.applicationCountStat') }}
                </div>
            </Link>

            <!-- KAFEL 4 -->
            <div class="group bg-white rounded-[2.5rem] border border-gray-100 shadow-sm hover:shadow-xl hover:shadow-blue-900/5 transition-all duration-500 hover:-translate-y-2 p-10 text-center relative overflow-hidden flex flex-col items-center justify-center min-h-[180px]">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50/50 rounded-full -mr-12 -mt-12 blur-2xl group-hover:bg-blue-100/50 transition-colors"></div>
                <div class="text-5xl font-black text-[#0A2C5C] group-hover:scale-110 transition-transform duration-500 relative z-10">
                    {{ viewCount }}
                </div>
                <div class="mt-3 text-[10px] font-black uppercase tracking-[0.2em] text-gray-400 relative z-10">
                    {{ __('translate.visitCount') }}
                </div>
            </div>
        </div>



        <!-- ===================== PUNKTY ===================== -->
        <div class="py-24 bg-gray-50/50 rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 relative overflow-hidden mb-12">
            <!-- Background Decorations -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100/30 rounded-full -mr-64 -mt-64 blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50/20 rounded-full -ml-48 -mb-48 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <!-- NAGŁÓWEK PAKIETÓW -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-white rounded-full shadow-sm border border-gray-100 mb-6">
                        <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                        <span class="text-[10px] font-black text-[#0A2C5C] uppercase tracking-[0.2em]">{{ __('translate.bestOffers') }}</span>
                    </div>

                    <h2 class="text-4xl font-black text-[#0A2C5C] leading-tight uppercase tracking-tighter mb-4">
                        {{__('translate.buyFirst')}} {{__('translate.buySecond')}}
                    </h2>

                    <div class="flex items-center justify-center gap-2">
                        <span class="text-sm font-bold text-gray-400 uppercase tracking-widest">{{ __('translate.give') }}:</span>
                        <span class="text-xl font-black text-[#00a0e3]">{{points ? points : '0'}}</span>
                        <span class="text-sm font-black text-[#0A2C5C] uppercase tracking-widest">{{ __('translate.points') }}</span>
                    </div>
                </div>

                <!-- LISTA PAKIETÓW -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-7 gap-8 mb-16">
                    <div
                        v-for="(pack, index) in packages"
                        :key="pack.id"
                        @click="selected = pack"
                        class="group cursor-pointer rounded-[2.5rem] p-8 text-center transition-all duration-500 relative border flex flex-col items-center justify-between min-h-[320px]"
                        :class="[
                            selected.id === pack.id
                                ? 'bg-[#0A2C5C] border-transparent shadow-2xl shadow-blue-900/40 scale-105 lg:scale-110 z-10'
                                : 'bg-white border-gray-100 shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2',
                        ]"
                    >
                        <!-- Active Badge -->
                        <div v-if="selected.id === pack.id" class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a0e3] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                            {{ __('translate.selected') }}
                        </div>

                        <div class="w-16 h-16 rounded-3xl flex items-center justify-center mb-6 transition-transform duration-500 group-hover:scale-110"
                             :class="selected.id === pack.id ? 'bg-white/10' : 'bg-gray-50'">
                            <img
                                :src="`/images/price/${pack.points}.svg`"
                                class="w-10 h-10 object-contain"
                                :class="selected.id === pack.id ? 'brightness-0 invert' : ''"
                                :alt="pack.points"
                            />
                        </div>

                        <div class="space-y-1 mb-6">
                            <div class="text-3xl font-black transition-colors duration-300"
                                 :class="selected.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                {{ pack.points.toLocaleString() }}
                            </div>
                            <div class="text-[10px] font-black uppercase tracking-[0.2em]"
                                 :class="selected.id === pack.id ? 'text-blue-200' : 'text-gray-400'">
                                {{ __('info.points') }}
                            </div>
                        </div>

                        <div class="w-full space-y-4">
                            <div class="text-xl font-black"
                                 :class="selected.id === pack.id ? 'text-white' : 'text-[#0A2C5C]'">
                                ${{ pack.price }}
                            </div>

                            <Link
                                :href="route('buy.store', pack)"
                                as="button"
                                v-if="pack.product_type == 'Points'"
                                class="block w-full py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all"
                                :class="selected.id === pack.id
                                    ? 'bg-white text-[#0A2C5C] hover:bg-gray-100'
                                    : 'bg-[#00a0e3] text-white hover:bg-[#008cc6] shadow-lg shadow-blue-400/20'"
                            >
                                {{__('translate.addToCart')}}
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- ===================== USŁUGI DODATKOWE ===================== -->
                <div class="text-center mb-12">
                    <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tighter" v-html="__('translate.exchangePointsForServices')"></h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    <div
                        v-for="(service, index) in additionalServices"
                        :key="service.id"
                        class="group rounded-[2.5rem] p-8 text-center transition-all duration-500 relative border flex flex-col justify-between min-h-[350px] bg-white border-gray-100 shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2 overflow-hidden"
                    >
                        <!-- Decoration -->
                        <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full -mr-16 -mt-16 group-hover:bg-blue-50 transition-colors"></div>

                        <div class="relative z-10">
                            <div class="w-20 h-20 bg-gray-50 rounded-[2rem] flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500">
                                <img
                                    :src="service.icon"
                                    class="w-12 h-12 object-contain"
                                    :alt="service.name"
                                />
                            </div>

                            <div v-if="service.id === 8 && bannerOptionsVisible[service.id]" class="text-xs font-black text-[#0A2C5C] uppercase leading-tight tracking-widest mb-4">
                                {{__('translate.exchangeBanner')}}
                            </div>
                            <template v-else>
                                <h4 class="text-lg font-black text-[#0A2C5C] uppercase tracking-tight mb-2">
                                    {{ service.name }}
                                </h4>
                                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest leading-relaxed">
                                    {{ service.description || getServiceDescription(service.service_type || '') }}
                                </p>
                            </template>
                        </div>

                        <div class="relative z-10 w-full mt-6">
                            <template v-if="service.id === 8">
                                <template v-if="bannerOptionsVisible[service.id]">
                                    <div class="space-y-3">
                                        <Link
                                            preserve-scroll
                                            v-if="points && points >= parseInt(service.price)"
                                            :href="route('buy.change', { product: service.id, points: service.price })"
                                            method="post"
                                            as="button"
                                            class="w-full bg-[#0A2C5C] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-blue-800 transition shadow-lg"
                                        >
                                            {{ __('translate.exchangePoints') }}
                                        </Link>
                                        <Link preserve-scroll method="post" as="button" :href="route('buy.reservedProject',[service,service.price])" class="w-full bg-red-600 text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-red-700 transition shadow-lg">
                                            {{__('translate.makeProject')}}
                                        </Link>
                                        <button
                                            @click="toggleBannerOptions(service.id)"
                                            class="w-full bg-gray-100 text-gray-400 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-gray-200 transition"
                                        >
                                            {{ __('translate.cancel') }}
                                        </button>
                                    </div>
                                </template>
                                <template v-else>
                                    <button
                                        @click="toggleBannerOptions(service.id)"
                                        class="w-full bg-[#00a0e3] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-[#008cc6] transition shadow-lg shadow-blue-400/20 mb-4"
                                    >
                                        {{ __('translate.exchangePoints') }}
                                    </button>
                                    <div class="text-xl font-black text-[#0A2C5C] tracking-tighter">
                                        {{ parseInt(service.price).toLocaleString() }} <span class="text-[10px] uppercase tracking-widest text-gray-400">{{ __('translate.pointsUnit') }}</span>
                                    </div>
                                </template>
                            </template>
                            <template v-else>
                                <Link
                                    preserve-scroll
                                    v-if="points && points >= parseInt(service.price)"
                                    :href="route('buy.change', { product: service.id, points: service.price })"
                                    method="post"
                                    as="button"
                                    class="w-full bg-[#00a0e3] text-white py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest hover:bg-[#008cc6] transition shadow-lg shadow-blue-400/20 mb-4"
                                >
                                    {{ __('translate.exchangePoints') }}
                                </Link>
                                <div v-else class="w-full bg-gray-50 text-gray-300 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest cursor-not-allowed mb-4">
                                    {{ __('translate.notEnoughPoints') }}
                                </div>

                                <div class="text-xl font-black text-[#0A2C5C] tracking-tighter">
                                    {{ parseInt(service.price).toLocaleString() }} <span class="text-[10px] uppercase tracking-widest text-gray-400">{{ __('translate.pointsUnit') }}</span>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================== CERTYFIKATY ===================== -->
        <div v-if="certificate" class="mt-8 bg-white rounded-[3rem] p-10 shadow-xl shadow-blue-900/5 border border-gray-100 mb-12">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-full mb-6">
                    <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-[0.2em]">{{ __('translate.recognition') || 'Wyróżnienie' }}</span>
                </div>
                <h2 class="text-4xl font-black text-[#0A2C5C] uppercase tracking-tighter">
                    {{ __('premium.certificates.premium_certificate') || 'Certyfikat Premium' }}
                </h2>
            </div>

            <!-- Kafelki certyfikatów -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-20 max-w-6xl mx-auto">
                <div
                    v-for="level in [1, 2, 3, 4]"
                    :key="level"
                    @click="selectCertificateLevel(level)"
                    class="group relative rounded-[2.5rem] p-8 text-center transition-all duration-500 border-2 flex flex-col justify-between min-h-[320px] cursor-pointer overflow-hidden"
                    :class="[
                        form.selectedLevel === level
                            ? 'border-[#00a0e3] bg-[#0A2C5C] shadow-2xl shadow-blue-900/40 scale-105 z-10'
                            : 'border-gray-100 bg-white shadow-xl shadow-blue-900/5 hover:shadow-blue-900/10 hover:-translate-y-2',
                        certificate.collectedPoints < certificate.levelPoints[level] ? 'opacity-50 grayscale cursor-not-allowed' : ''
                    ]"
                >
                    <!-- Active Badge -->
                    <div v-if="form.selectedLevel === level" class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1.5 bg-[#00a0e3] text-white text-[8px] font-black uppercase tracking-widest rounded-full shadow-lg">
                        {{ __('translate.selected') }}
                    </div>

                    <div class="flex flex-col items-center relative z-10">
                        <div class="w-16 h-16 mb-6 rounded-3xl flex items-center justify-center transition-transform duration-500 group-hover:scale-110"
                             :class="form.selectedLevel === level ? 'bg-white/10' : 'bg-gray-50'">
                            <svg v-if="level === 1" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" :class="form.selectedLevel === level ? 'text-white' : 'text-[#00a0e3]'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            <svg v-else-if="level === 2" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" :class="form.selectedLevel === level ? 'text-white' : 'text-[#00a0e3]'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M16.243 17.657l.707.707M7.757 6.343l.707.707M8 12a4 4 0 118 0 4 4 0 01-8 0z" />
                            </svg>
                            <svg v-else-if="level === 3" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" :class="form.selectedLevel === level ? 'text-white' : 'text-[#00a0e3]'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" :class="form.selectedLevel === level ? 'text-white' : 'text-[#00a0e3]'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.167a2.405 2.405 0 011.411-2.923l2.147-1.107a1.775 1.775 0 011.412 0l2.147 1.107a2.405 2.405 0 011.411 2.923l-2.147 6.167a1.76 1.76 0 01-3.417-.592V5.882z" />
                            </svg>
                        </div>
                        <div class="text-3xl font-black leading-none mb-1 transition-colors" :class="form.selectedLevel === level ? 'text-white' : 'text-[#0A2C5C]'">
                            {{ certificate.levelPoints[level].toLocaleString() }}
                        </div>
                        <div class="text-[10px] font-black uppercase tracking-[0.2em] mb-4" :class="form.selectedLevel === level ? 'text-blue-200' : 'text-gray-400'">
                            {{ __('translate.points') }}
                        </div>
                        <div class="text-xs font-black uppercase tracking-widest leading-tight" :class="form.selectedLevel === level ? 'text-[#00a0e3]' : 'text-[#00a0e3]'">
                            {{ certificate.levelNames[level] }}
                        </div>
                    </div>

                    <button
                        v-if="certificate.collectedPoints >= certificate.levelPoints[level]"
                        @click.stop="generateCertificate(level)"
                        class="mt-8 w-full py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest transition-all relative z-10"
                        :class="form.selectedLevel === level
                                    ? 'bg-white text-[#0A2C5C] hover:bg-gray-100'
                                    : 'bg-[#00a0e3] text-white hover:bg-[#008cc6] shadow-lg shadow-blue-400/20'"
                    >
                        {{ __('translate.choose') || 'Wybieram' }}
                    </button>
                    <div v-else class="mt-8 w-full bg-gray-50 text-gray-300 py-4 rounded-2xl font-black text-[10px] uppercase tracking-widest cursor-not-allowed relative z-10">
                        {{ __('translate.notEnoughPoints') }}
                    </div>
                </div>
            </div>

            <!-- Pasek postępu (Styl z Price.vue) -->
            <div class="max-w-4xl mx-auto mt-12 mb-20 px-4">
                <div class="flex items-center gap-3 px-4 py-2 bg-blue-50 rounded-2xl w-fit mx-auto mb-10">
                    <div class="w-2 h-2 rounded-full bg-[#00a0e3] animate-pulse"></div>
                    <span class="text-[10px] font-black text-[#00a0e3] uppercase tracking-widest">{{ __('premium.certificates.progress') || 'Postęp certyfikacji' }}</span>
                </div>

                <div class="relative pt-8 px-[20px]">
                    <div class="relative h-4 bg-gray-100 rounded-full border border-gray-100 shadow-inner">
                        <div class="h-full bg-gradient-to-r from-[#0A2C5C] to-[#00a0e3] rounded-full absolute top-0 left-0 transition-all duration-1000 ease-out shadow-lg"
                             :style="{ width: progressPercentage + '%' }">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                        </div>

                        <!-- Znaczniki (Handle style) -->
                        <div
                            v-for="level in [1, 2, 3, 4]"
                            :key="'marker-' + level"
                            class="absolute top-1/2 -translate-y-1/2 flex flex-col items-center"
                            :style="{ left: getLevelPosition(level) + '%' }"
                        >
                            <div class="w-3 h-3 rounded-full shadow-md border-2 border-white transition-colors duration-500"
                                 :class="progressPercentage >= getLevelPosition(level) ? 'bg-[#00a0e3]' : 'bg-gray-200'"></div>

                            <div class="absolute top-6 flex flex-col items-center whitespace-nowrap">
                                <span class="text-[10px] font-black text-[#0A2C5C]">{{ certificate.levelPoints[level].toLocaleString() }}</span>
                                <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest">{{ certificate.levelNames[level].replace('CERTYFIKAT ', '') }}</span>
                            </div>
                        </div>

                        <!-- Current Progress Handle -->
                        <div class="w-10 h-10 bg-white border-4 border-[#00a0e3] rounded-2xl shadow-xl
                                    absolute -top-3 transition-all duration-1000 ease-out -ml-5 flex items-center justify-center"
                             :style="{ left: progressPercentage + '%' }">
                            <div class="w-2 h-2 bg-[#00a0e3] rounded-full animate-ping"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h4 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tighter">
                    {{ __('translate.youHave') || 'POSIADASZ' }}: <span class="text-[#00a0e3]">{{ certificate.collectedPoints.toLocaleString() }}</span> PKT
                </h4>
            </div>
        </div>
        <!-- ===================== FAKTURY ===================== -->
        <div class="mt-12 bg-white rounded-[3rem] p-10 shadow-xl shadow-blue-900/5 border border-gray-100">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">
                        {{ __('translate.Invoices') }}
                    </h2>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">
                        {{ __('translate.lastInvoices') || 'Ostatnio wygenerowane faktury' }}
                    </p>
                </div>
                <Link
                    :href="route('invoices.index')"
                    class="group flex items-center gap-2 px-6 py-3 bg-gray-50 text-[#0A2C5C] text-[10px] font-black rounded-2xl hover:bg-blue-50 transition-all uppercase tracking-widest border border-gray-100"
                >
                    {{ __('translate.fullInvoiceList') }}
                    <span class="text-lg group-hover:translate-x-1 transition-transform">→</span>
                </Link>
            </div>

            <div class="overflow-x-auto custom-scrollbar">
                <table class="w-full border-separate border-spacing-y-4">
                    <thead>
                        <tr class="text-gray-400 text-[10px] font-black uppercase tracking-widest text-center">
                            <th class="pb-2 px-6">{{ __('translate.invoiceId') }}</th>
                            <th class="pb-2 px-6 text-left">{{ __('translate.invoiceNumber') }}</th>
                            <th class="pb-2 px-6">{{ __('translate.invoiceDate') }}</th>
                            <th class="pb-2 px-6">{{ __('translate.invoiceAmount') }}</th>
                            <th class="pb-2 px-6">{{ __('translate.invoiceStatus') || 'Status' }}</th>
                            <th class="pb-2 px-6">{{ __('translate.invoiceAction') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            v-for="invoice in lastInvoices"
                            :key="invoice.id"
                            class="group bg-white transition-all duration-300 hover:shadow-lg hover:shadow-blue-900/5"
                        >
                            <td class="py-6 px-6 text-center text-gray-300 text-xs first:rounded-l-[2rem] border-y border-l border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors">
                                #{{ invoice.id }}
                            </td>
                            <td class="py-6 px-6 text-left text-[#0A2C5C] font-black text-sm border-y border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors">
                                {{ invoice.number }}/{{ invoice.month }}/{{ invoice.year }}
                            </td>
                            <td class="py-6 px-6 text-center text-gray-500 text-[10px] border-y border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors font-bold uppercase tracking-widest">
                                {{ invoice.date_invoice }}
                            </td>
                            <td class="py-6 px-6 text-center text-[#0A2C5C] font-black text-sm border-y border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors">
                                ${{ parseFloat(invoice.amount).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}
                            </td>
                            <td class="py-6 px-6 text-center border-y border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors">
                                <div class="flex justify-center">
                                    <div v-if="invoice.opened" class="flex items-center gap-2 px-3 py-1 bg-blue-50 text-[#00a0e3] rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.opened') }}</span>
                                    </div>
                                    <div v-else class="flex items-center gap-2 px-3 py-1 bg-red-50 text-red-400 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        <span class="text-[8px] font-black uppercase tracking-widest">{{ __('translate.notOpened') }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-6 px-6 last:rounded-r-[2rem] border-y border-r border-gray-50 group-hover:border-blue-100 group-hover:bg-blue-50/10 transition-colors text-center">
                                <a
                                    :href="route('invoicesDownload', invoice.id)"
                                    class="inline-flex items-center justify-center px-6 py-3 bg-[#0A2C5C] text-white text-[10px] font-black rounded-xl hover:bg-blue-800 transition-all shadow-lg shadow-blue-900/10 uppercase tracking-widest"
                                    @click="invoice.opened = true"
                                >
                                    {{ __('translate.invoiceDownload') }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mt-12 pb-12">
            <!-- STATYSTYKI -->
            <div class="lg:col-span-8 bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-12">
                <div class="flex items-center justify-between mb-12">
                    <div>
                        <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{ __('translate.recruiterStatistics') }}</h2>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">{{ __('translate.statisticsDescription') || 'Analiza aktywności rekrutacyjnej' }}</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-[#00a0e3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                    <div class="flex flex-col">
                        <div class="mb-8 flex items-center justify-between">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                <div class="w-2 h-2 rounded-full bg-[#0A2C5C]"></div>
                                {{ __('translate.recruits') }}
                            </h3>
                        </div>
                        <div class="flex justify-center bg-gray-50/30 rounded-[3rem] p-8 border border-gray-50/50 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-blue-50/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <apexchart
                                v-if="chartData"
                                width="320"
                                height="320"
                                type="donut"
                                :options="chartOptions"
                                :series="chartSeries"
                                class="relative z-10"
                            />
                            <div v-else class="h-[320px] flex items-center justify-center text-center text-gray-300 text-[10px] font-black uppercase tracking-widest relative z-10">
                                {{ __('translate.NoData') }}
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="mb-8 flex items-center justify-between">
                            <h3 class="text-[10px] font-black text-gray-400 uppercase tracking-widest flex items-center gap-2">
                                <div class="w-2 h-2 rounded-full bg-[#00a0e3]"></div>
                                {{ __('translate.applications') }}
                            </h3>
                        </div>
                        <div class="flex justify-center bg-gray-50/30 rounded-[3rem] p-8 border border-gray-50/50 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-blue-50/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <apexchart
                                v-if="chartDataApp"
                                width="320"
                                height="320"
                                type="donut"
                                :options="chartOptionsApp"
                                :series="chartSeriesApp"
                                class="relative z-10"
                            />
                            <div v-else class="h-[320px] flex items-center justify-center text-center text-gray-300 text-[10px] font-black uppercase tracking-widest relative z-10">
                                {{ __('translate.NoData') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- POWIADOMIENIA -->
            <div class="lg:col-span-4 bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-gray-100 p-12 flex flex-col">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h2 class="text-2xl font-black text-[#0A2C5C] uppercase tracking-tight">{{__('translate.notifications')}}</h2>
                    </div>
                    <Link preserveScroll v-if="usePage().props.unreadNotifications" :href="route('notifications.markAllAsRead')" method="post" as="button" class="text-[10px] font-black text-red-500 hover:text-red-600 uppercase tracking-widest transition-colors">
                        {{ __('translate.markAllAsRead') }}
                    </Link>
                </div>

                <div class="flex-1 custom-scrollbar overflow-y-auto max-h-[500px] pr-2">
                    <ul class="space-y-4">
                        <li
                            v-if="notifications.length"
                            v-for="notification in notifications"
                            :key="notification.id"
                            class="group relative flex items-start gap-4 p-6 rounded-[2rem] transition-all duration-300 border border-gray-50 hover:bg-gray-50 hover:border-blue-100 hover:shadow-lg hover:shadow-blue-900/5"
                        >
                            <div class="shrink-0 mt-1 w-2.5 h-2.5 rounded-full transition-all duration-300" :class="notification.read_at ? 'bg-gray-200' : 'bg-[#00a0e3] shadow-[0_0_12px_rgba(0,160,227,0.5)] group-hover:scale-125'"></div>

                            <div class="flex-1 min-w-0">
                                <button
                                    v-if="!notification.read_at"
                                    class="text-left text-xs font-black text-[#0A2C5C] uppercase tracking-tight leading-snug group-hover:text-[#00a0e3] transition-colors"
                                    v-html="formatNotification(notification).message"
                                    @click="markAsRead(notification.id)"
                                ></button>
                                <span v-else class="text-xs font-bold text-gray-400 uppercase tracking-tight leading-snug" v-html="formatNotification(notification).message"></span>
                                <p v-if="notification.created_at" class="mt-2 text-[8px] font-black text-gray-300 uppercase tracking-widest">
                                    {{ moment(notification.created_at).fromNow() }}
                                </p>
                            </div>
                        </li>
                        <li v-else class="py-20 text-center flex flex-col items-center">
                            <div class="w-20 h-20 bg-gray-50 rounded-[2.5rem] flex items-center justify-center mb-6">
                                <svg class="w-10 h-10 text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                            </div>
                            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest">{{ __('translate.noNotifications') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
</template>

<script setup>
import {Link, router, usePage, useForm} from "@inertiajs/vue3";
import __ from "@/lang.js";
import {computed, ref, reactive} from "vue";
import moment from "moment/moment.js";

const props = defineProps({
    notifications: {
        type: Array,
        default: () => []
    },
    chartData: {
        type: Object,
        default: null
    },
    chartDataApp: {
        type: Object,
        default: null
    },
    chartDataInvoices: {
        type: Object,
        default: null
    },
    packages: {
        type: Array,
        default: () => []
    },
    additionalServices: {
        type: Array,
        default: () => []
    },
    chartFirm: {
        type: Object,
        default: null
    },
    certificate: {
        type: Object,
        default: null
    },
    recruitsCount: Number,
    projectsCount: Number,
    aplicationCount: Number,
    viewCount: Number,
});

const packagesRef = ref(props.packages);
const selected = ref(packagesRef.value[Math.floor(packagesRef.value.length / 2)] || {});
const bannerOptionsVisible = reactive({});
const lastInvoices = computed(() => {
    return props.chartDataInvoices || [];
});

// Ustawienie locale dla moment.js
moment.locale(usePage().props.language);

let points = computed(() => {
    return usePage().props.auth.user?.firm?.points;
});

// Certyfikat Premium logic
const form = useForm({
    selectedLevel: null,
});

const selectCertificateLevel = (level) => {
    if (props.certificate && props.certificate.collectedPoints >= props.certificate.levelPoints[level]) {
        form.selectedLevel = level;
    }
};

const generateCertificate = (level) => {
    if (level) {
        form.selectedLevel = level;
    }

    if (!form.selectedLevel) return;

    form.post(route('firm.premium-certificate.generate'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
    });
};

const progressPercentage = computed(() => {
    if (!props.certificate) return 0;
    const maxPoints = props.certificate.levelPoints[4];
    return Math.min((props.certificate.collectedPoints / maxPoints) * 100, 100);
});

const getLevelPosition = (level) => {
    if (!props.certificate) return 0;
    const maxPoints = props.certificate.levelPoints[4];
    return (props.certificate.levelPoints[level] / maxPoints) * 100;
};

const toggleBannerOptions = (serviceId) => {
    bannerOptionsVisible[serviceId] = !bannerOptionsVisible[serviceId];
};

const getServiceIcon = (type) => {
    const iconMap = {
        'certificate': '10000',
        'banner': '8000',
        'promotional': '6000',
        'distinguished': '3000',
    };
    return iconMap[type.toLowerCase()] || '3000';
};

const getServiceName = (type) => {
    const nameMap = {
        'certificate': __('info.certyfikat'),
        'banner': __('info.baner'),
        'promotional': __('info.promocja'),
        'distinguished': __('info.wyroznienie'),
    };
    return nameMap[type.toLowerCase()] || type;
};

const getServiceDescription = (type) => {
    const descMap = {
        'certificate': __('info.certyfikat_desc'),
        'banner': __('info.baner_desc'),
        'promotional': __('info.promocja_desc'),
        'distinguished': __('info.wyroznienie_desc'),
    };
    return descMap[type.toLowerCase()] || '';
};

const formatNotification = (notification) => {
    const data = notification.data;
    if (!data) return { title: __('translate.unknownNotification'), message: '' };

    const message = data.message ? __(data.message, { ...data, id: data.aplication || data.id }) : '';

    return {
        title: __(data.title || 'translate.newNotification', data) || __('translate.notification'),
        message: message,
        action: data.action ? __(data.action, data) : null,
        actionUrl: data.actionUrl || null
    };
};
const markAsRead = (id) => {
    router.post(
        route('notifications.markAsRead', id),
        {},
        {
            preserveScroll: true,
            preserveState: true,
            only: ['notifications', 'unreadNotifications'],

        }
    );
};
// Obliczenia dla wykresu
const chartSeries = computed(() => {
    if (!props.chartData) return [0, 0, 0, 0];
    return [
        props.chartData.active || 0,      // Zaakceptowane
        props.chartData.no || 0,       // Odrzucone
    ];
});
const chartSeriesApp = computed(() => {
    if (!props.chartDataApp) return [0, 0, 0, 0];
    return [
        props.chartDataApp.yes || 0,      // Zaakceptowane
        props.chartDataApp.no || 0,       // Odrzucone
        props.chartDataApp.maybe || 0,    // Rozpatrywane
        props.chartDataApp.new || 0       // Wysłane
    ];
});

const chartOptions = computed(() => ({
    chart: {
        type: 'donut',
    },
    labels: [
        __('translate.activeRecruits'),      // Aktywni - rekruterzy
        __('translate.notActiveRecruits'),       // Nieaktywni - rekruterzy
    ],
    colors: ['#0A2C5C', '#e31e24'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opts) {
            return opts.w.config.series[opts.seriesIndex];
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '16px',
                        fontWeight: 600
                    }
                }
            }
        }
    }
}));
const chartOptionsApp = computed(() => ({
    chart: {
        type: 'donut',
    },
    labels: [
        __('translate.labels.yes'),      // Zaakceptowane - status yes
        __('translate.labels.no'),       // Odrzucone - status no
        __('translate.labels.maybe'),    // Rozpatrywane - status maybe
        __('translate.labels.sent')      // Wysłane - status NULL
    ],
    colors: ['#0A2C5C', '#e31e24', '#00a0e3', '#9ca3af'],
    legend: {
        position: 'bottom'
    },
    dataLabels: {
        enabled: true,
        formatter: function (val, opts) {
            return opts.w.config.series[opts.seriesIndex];
        }
    },
    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                labels: {
                    show: true,
                    total: {
                        show: true,
                        label: __('translate.total'),
                        fontSize: '16px',
                        fontWeight: 600
                    }
                }
            }
        }
    }
}));
</script>
