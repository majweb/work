<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectProdukcja4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        $OPERATOR_AUTOMATÓW_CEGLARSKICH_I_WAPIENNO_PIASKARSKICH = [
            [
                "id" => 27644,
                "name" => json_encode([
                    "pl" => "Obsługa automatów do produkcji cegieł oraz materiałów wapienno-piaskarskich.",
                    "en" => "Operating machines for producing bricks and lime-sand materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27645,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami produkcji cegieł, takich jak temperatura, czas wypalania, ciśnienie.",
                    "en" => "Managing brick production parameters, such as temperature, firing time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27646,
                "name" => json_encode([
                    "pl" => "Kontrola jakości cegieł i materiałów wapienno-piaskarskich, zapewniając odpowiednią wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of bricks and lime-sand materials, ensuring proper strength and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27647,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja automatów cegielniczych i wapienno-piaskarskich.",
                    "en" => "Repairing and maintaining brick and lime-sand machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27648,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji cegieł, aby zwiększyć wydajność i jakość.",
                    "en" => "Optimizing the brick production process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27649,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji cegieł i materiałów wapienno-piaskarskich.",
                    "en" => "Documenting the results of the brick and lime-sand production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HARTOWACZ_BETONÓW_I_SYLIKATÓW = [
            [
                "id" => 27650,
                "name" => json_encode([
                    "pl" => "Hartowanie betonu i materiałów sylikatowych w celu nadania im odpowiednich właściwości wytrzymałościowych.",
                    "en" => "Hardening concrete and silicate materials to give them the required strength properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27651,
                "name" => json_encode([
                    "pl" => "Zarządzanie temperaturą i czasem procesu hartowania betonu oraz materiałów sylikatowych.",
                    "en" => "Managing temperature and time during the hardening process of concrete and silicate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27652,
                "name" => json_encode([
                    "pl" => "Kontrola jakości hartowanych materiałów, zapewniając odpowiednią twardość i wytrzymałość.",
                    "en" => "Controlling the quality of hardened materials, ensuring proper hardness and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27653,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu hartowania w celu zwiększenia efektywności i poprawy jakości materiałów.",
                    "en" => "Optimizing the hardening process to increase efficiency and improve the quality of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27654,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do hartowania betonu i materiałów sylikatowych.",
                    "en" => "Repairing and maintaining equipment for hardening concrete and silicate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27655,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu hartowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the hardening process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KRAJACZ_MATERIAŁÓW_BUDOWLANYCH = [
            [
                "id" => 27656,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia materiałów budowlanych, takich jak cegły, płyty gipsowe i inne elementy budowlane.",
                    "en" => "Operating machines for cutting building materials, such as bricks, gypsum boards, and other construction elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27657,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn tnących, takim jak prędkość cięcia, ciśnienie i ustawienie narzędzi.",
                    "en" => "Managing the parameters of cutting machines, such as cutting speed, pressure, and tool setting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27658,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ciętych materiałów, zapewniając odpowiednią precyzję i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of cut materials, ensuring proper precision and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27659,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do cięcia materiałów budowlanych.",
                    "en" => "Repairing and maintaining machines for cutting building materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27660,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia w celu zwiększenia wydajności i jakości ciętych materiałów.",
                    "en" => "Optimizing the cutting process to increase efficiency and quality of cut materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27661,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu cięcia materiałów oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the material cutting process results and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_BLOKÓW_I_TYNKÓW_GIPSOWYCH = [
            [
                "id" => 27662,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania bloków budowlanych oraz tynków gipsowych.",
                    "en" => "Operating machines for forming construction blocks and gypsum plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27663,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn formujących, takim jak czas formowania, ciśnienie i temperatura.",
                    "en" => "Managing parameters of forming machines, such as forming time, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27664,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych bloków i tynków, zapewniając odpowiednią twardość, wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of formed blocks and plasters, ensuring proper hardness, strength, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27665,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do formowania bloków i tynków.",
                    "en" => "Repairing and maintaining equipment for forming blocks and plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27666,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania bloków i tynków, w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the process of forming blocks and plasters to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27667,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania bloków oraz tynków gipsowych.",
                    "en" => "Documenting the results of block and gypsum plaster forming process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ELEMENTÓW_Z_BETONU_KOMÓRKOWEGO = [
            [
                "id" => 27668,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji elementów z betonu komórkowego, takich jak bloczki, płyty i inne elementy budowlane.",
                    "en" => "Operating equipment for producing autoclaved aerated concrete elements, such as blocks, slabs, and other construction components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27669,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami produkcji betonu komórkowego, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing parameters of autoclaved aerated concrete production, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27670,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych elementów z betonu komórkowego, zapewniając odpowiednią wytrzymałość i kształt.",
                    "en" => "Controlling the quality of produced autoclaved aerated concrete elements, ensuring proper strength and shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27671,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji betonu komórkowego.",
                    "en" => "Repairing and maintaining equipment for autoclaved aerated concrete production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27672,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji betonu komórkowego w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the autoclaved aerated concrete production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27673,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji betonu komórkowego i raportowanie jakości wykonania.",
                    "en" => "Documenting autoclaved aerated concrete production results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_ASFALTOBETONOWYCH = [
            [
                "id" => 27674,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji mas asfaltobetonowych, takich jak mieszalniki i urządzenia do formowania nawierzchni.",
                    "en" => "Operating equipment for producing asphalt-concrete mixtures, such as mixers and pavement forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27675,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji mas asfaltobetonowych, takim jak temperatura mieszania, czas i proporcje materiałów.",
                    "en" => "Managing the production parameters of asphalt-concrete mixtures, such as mixing temperature, time, and material proportions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27676,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych mas asfaltobetonowych, zapewniając odpowiednią twardość, wytrzymałość i zgodność z normami.",
                    "en" => "Controlling the quality of asphalt-concrete mixtures, ensuring proper hardness, durability, and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27677,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji mas asfaltobetonowych.",
                    "en" => "Repairing and maintaining equipment for producing asphalt-concrete mixtures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27678,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mas asfaltobetonowych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the asphalt-concrete production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27679,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji mas asfaltobetonowych i raportowanie wyników jakościowych.",
                    "en" => "Documenting asphalt-concrete production results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WYTWÓRCZYCH_MIESZANEK_BETONOWYCH = [
            [
                "id" => 27680,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wytwarzania mieszanek betonowych, w tym mieszalników, przenośników i urządzeń formujących.",
                    "en" => "Operating equipment for producing concrete mixtures, including mixers, conveyors, and forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27681,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji betonu, takimi jak czas mieszania, proporcje składników i temperatura.",
                    "en" => "Managing the parameters of concrete production process, such as mixing time, ingredient proportions, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27682,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wytworzonych mieszanek betonowych, zapewniając odpowiednią gęstość, wytrzymałość i jednolitość.",
                    "en" => "Controlling the quality of produced concrete mixtures, ensuring proper density, strength, and uniformity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27683,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wytwórczych mieszanki betonowej.",
                    "en" => "Repairing and maintaining equipment for producing concrete mixtures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27684,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji betonu w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the concrete production process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27685,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji mieszanek betonowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of the concrete mixture production process and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CEMENTOWYCH_KAMIENNYCH_I_POKREWNYCH = [
            [
                "id" => 27686,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji wyrobów cementowych, kamiennych, takich jak cegły, bloczki, płyty.",
                    "en" => "Operating machines and equipment for producing cement, stone products such as bricks, blocks, and slabs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27687,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów produkcji wyrobów cementowych i kamiennych, takimi jak czas, temperatura, ciśnienie.",
                    "en" => "Managing parameters of cement and stone product production processes, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27688,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów cementowych i kamiennych, zapewniając odpowiednią trwałość, wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of cement and stone products, ensuring proper durability, strength, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27689,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn i urządzeń do produkcji wyrobów cementowych i kamiennych.",
                    "en" => "Repairing and maintaining machines and equipment for cement and stone product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27690,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów cementowych i kamiennych, w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing production processes of cement and stone products to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27691,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów cementowych i kamiennych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production results of cement and stone products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $APARATOWY_PROCESÓW_CHEMICZNYCH = [
            [
                "id" => 27692,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do prowadzenia procesów chemicznych, takich jak mieszanie, destylacja, czy reakcje chemiczne.",
                    "en" => "Operating equipment for chemical processes, such as mixing, distillation, or chemical reactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27693,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów chemicznych, takimi jak temperatura, ciśnienie, czas reakcji.",
                    "en" => "Managing chemical process parameters such as temperature, pressure, and reaction time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27694,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów chemicznych, zapewniając odpowiednią czystość, wydajność i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of chemical products, ensuring proper purity, efficiency, and compliance with specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27695,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów chemicznych w celu poprawy wydajności i jakości produkcji.",
                    "en" => "Optimizing chemical processes to improve production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27696,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do procesów chemicznych, zapewniając ich długotrwałą sprawność.",
                    "en" => "Repairing and maintaining chemical process equipment to ensure long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27697,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów chemicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting chemical process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_PAPY = [
            [
                "id" => 27698,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji papy, w tym mieszanie, formowanie i cięcie materiałów do produkcji pokryć dachowych.",
                    "en" => "Operating machines for producing roofing felt, including mixing, forming, and cutting materials for roof coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27699,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami produkcji papy, takimi jak temperatura, czas formowania i ciśnienie.",
                    "en" => "Managing roofing felt production parameters, such as temperature, forming time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27700,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanej papy, zapewniając jej odpowiednią wytrzymałość, elastyczność i odporność na warunki atmosferyczne.",
                    "en" => "Controlling the quality of produced roofing felt, ensuring proper strength, flexibility, and resistance to weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27701,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji papy, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining machines for producing roofing felt, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27702,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji papy w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the roofing felt production process to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27703,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji papy oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the roofing felt production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_TAŚM_MAGNETYCZNYCH = [
            [
                "id" => 27704,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji taśm magnetycznych, wykorzystywanych w urządzeniach elektronicznych i informacyjnych.",
                    "en" => "Operating machines for producing magnetic tapes, used in electronic and information devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27705,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami produkcji taśm magnetycznych, takimi jak prędkość, temperatura i grubość taśmy.",
                    "en" => "Managing magnetic tape production parameters, such as speed, temperature, and tape thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27706,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych taśm magnetycznych, zapewniając odpowiednią jakość nośnika magnetycznego.",
                    "en" => "Controlling the quality of produced magnetic tapes, ensuring proper quality of the magnetic medium."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27707,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji taśm magnetycznych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining machines for producing magnetic tapes, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27708,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji taśm magnetycznych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the magnetic tape production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27709,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji taśm magnetycznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the magnetic tape production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_ZAPAŁCZANYCH = [
            [
                "id" => 27710,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji zapałek, w tym formowanie, pakowanie i kontrola jakości.",
                    "en" => "Operating machines for producing matches, including shaping, packaging, and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27711,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami produkcji zapałek, takimi jak czas, ciśnienie, temperatura.",
                    "en" => "Managing match production parameters, such as time, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27712,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych zapałek, zapewniając ich odpowiednią długość, trwałość i funkcjonalność.",
                    "en" => "Controlling the quality of produced matches, ensuring proper length, durability, and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27713,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji zapałek, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining machines for producing matches, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27714,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji zapałek w celu poprawy jakości i zwiększenia wydajności.",
                    "en" => "Optimizing the match production process to improve quality and increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27715,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji zapałek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the match production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_REAKTORÓW_I_AUTOKLAWÓW = [
            [
                "id" => 27716,
                "name" => json_encode([
                    "pl" => "Obsługa reaktorów i autoklawów w procesach chemicznych, takich jak reakcje chemiczne i obróbka termiczna.",
                    "en" => "Operating reactors and autoclaves in chemical processes, such as chemical reactions and thermal treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27717,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami reaktorów i autoklawów, takimi jak temperatura, ciśnienie i czas procesu.",
                    "en" => "Managing parameters of reactors and autoclaves, such as temperature, pressure, and process time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27718,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesów w reaktorach i autoklawach, zapewniając zgodność z normami bezpieczeństwa i jakości.",
                    "en" => "Controlling the quality of processes in reactors and autoclaves, ensuring compliance with safety and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27719,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja reaktorów i autoklawów, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining reactors and autoclaves to ensure their continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27720,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów w reaktorach i autoklawach w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing processes in reactors and autoclaves to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27721,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów w reaktorach i autoklawach oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting reactor and autoclave process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DESTYLACYJNYCH = [
            [
                "id" => 27722,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń destylacyjnych do separacji substancji na podstawie różnic w temperaturze wrzenia.",
                    "en" => "Operating distillation equipment for separating substances based on boiling point differences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27723,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu destylacji, takimi jak temperatura, czas destylacji i prędkość przepływu.",
                    "en" => "Managing distillation process parameters, such as temperature, distillation time, and flow rate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27724,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu destylacji, zapewniając odpowiednią czystość i efektywność separacji.",
                    "en" => "Controlling the quality of the distillation process, ensuring proper purity and separation efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27725,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń destylacyjnych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining distillation equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27726,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu destylacji w celu poprawy wydajności i jakości destylowanych substancji.",
                    "en" => "Optimizing the distillation process to improve efficiency and the quality of distilled substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27727,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu destylacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the distillation process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_EKSTRAKCJI = [
            [
                "id" => 27728,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do ekstrakcji substancji z surowców, takich jak rozpuszczanie, filtracja i oddzielanie.",
                    "en" => "Operating equipment for extracting substances from raw materials, such as dissolving, filtration, and separation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27729,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu ekstrakcji, takim jak temperatura, czas ekstrakcji i ciśnienie.",
                    "en" => "Managing extraction process parameters, such as temperature, extraction time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27730,
                "name" => json_encode([
                    "pl" => "Kontrola jakości substancji pozyskanych w procesie ekstrakcji, zapewniając ich czystość i wydajność.",
                    "en" => "Controlling the quality of substances obtained in the extraction process, ensuring purity and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27731,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń ekstrakcyjnych, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining extraction equipment, ensuring continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27732,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ekstrakcji w celu poprawy wydajności i jakości pozyskiwanych substancji.",
                    "en" => "Optimizing the extraction process to improve efficiency and the quality of extracted substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27733,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ekstrakcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the extraction process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_KRYSTALIZACJI = [
            [
                "id" => 27734,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do krystalizacji substancji chemicznych, takich jak chłodzenie, filtracja i tworzenie kryształów.",
                    "en" => "Operating equipment for crystallizing chemical substances, such as cooling, filtration, and crystal formation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27735,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu krystalizacji, takim jak temperatura, czas krystalizacji i ciśnienie.",
                    "en" => "Managing crystallization process parameters, such as temperature, crystallization time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27736,
                "name" => json_encode([
                    "pl" => "Kontrola jakości krystalizowanych substancji, zapewniając odpowiednią czystość i wielkość kryształów.",
                    "en" => "Controlling the quality of crystallized substances, ensuring proper purity and crystal size."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27737,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do krystalizacji, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining crystallization equipment, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27738,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu krystalizacji w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the crystallization process to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27739,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu krystalizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the crystallization process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_CIEPLNEJ_CHEMIKALIÓW = [
            [
                "id" => 27740,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki cieplnej chemikaliów, takich jak piecyki, piecze i autoklawy.",
                    "en" => "Operating equipment for thermal treatment of chemicals, such as furnaces, kilns, and autoclaves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27741,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami obróbki cieplnej, takim jak temperatura, czas i ciśnienie w urządzeniach.",
                    "en" => "Managing thermal treatment parameters, such as temperature, time, and pressure in equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27742,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrobionych cieplnie chemikaliów, zapewniając ich właściwości fizyczne i chemiczne.",
                    "en" => "Controlling the quality of thermally treated chemicals, ensuring their physical and chemical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27743,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do obróbki cieplnej chemikaliów.",
                    "en" => "Repairing and maintaining equipment for thermal treatment of chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27744,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki cieplnej chemikaliów, w celu poprawy efektywności i jakości.",
                    "en" => "Optimizing thermal treatment processes of chemicals to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27745,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki cieplnej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the thermal treatment process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CEMENTU = [
            [
                "id" => 27746,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji cementu, w tym młynów, pieców i innych maszyn do wytwarzania cementu.",
                    "en" => "Operating equipment for cement production, including mills, kilns, and other machines for cement manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27747,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji cementu, takim jak temperatura pieca, czas wypalania i proporcje składników.",
                    "en" => "Managing cement production process parameters, such as kiln temperature, firing time, and ingredient proportions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27748,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanego cementu, zapewniając odpowiednią wytrzymałość, twardość i strukturę.",
                    "en" => "Controlling the quality of produced cement, ensuring proper strength, hardness, and structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27749,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji cementu, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining cement production equipment to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27750,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji cementu, w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the cement production process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27751,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji cementu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cement production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_NIEORGANICZNYCH = [
            [
                "id" => 27752,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji chemikaliów nieorganicznych, takich jak reakory, piece, i urządzenia do syntez.",
                    "en" => "Operating equipment for producing inorganic chemicals, such as reactors, furnaces, and synthesis devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27753,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji chemikaliów nieorganicznych, takim jak temperatura, ciśnienie, czas reakcji.",
                    "en" => "Managing parameters of inorganic chemical production processes, such as temperature, pressure, and reaction time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27754,
                "name" => json_encode([
                    "pl" => "Kontrola jakości chemikaliów nieorganicznych, zapewniając odpowiednią czystość i właściwości.",
                    "en" => "Controlling the quality of inorganic chemicals, ensuring proper purity and properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27755,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji chemikaliów nieorganicznych.",
                    "en" => "Repairing and maintaining equipment for producing inorganic chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27756,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji chemikaliów nieorganicznych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing inorganic chemical production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27757,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji chemikaliów nieorganicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting inorganic chemical production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_ORGANICZNYCH = [
            [
                "id" => 27758,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji chemikaliów organicznych, takich jak reaktory, urządzenia do syntez i distylacji.",
                    "en" => "Operating equipment for producing organic chemicals, such as reactors, synthesis devices, and distillation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27759,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji chemikaliów organicznych, takim jak temperatura, ciśnienie, czas reakcji.",
                    "en" => "Managing parameters of organic chemical production processes, such as temperature, pressure, and reaction time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27760,
                "name" => json_encode([
                    "pl" => "Kontrola jakości chemikaliów organicznych, zapewniając ich czystość, wydajność i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of organic chemicals, ensuring their purity, efficiency, and compliance with specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27761,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji chemikaliów organicznych.",
                    "en" => "Repairing and maintaining equipment for producing organic chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27762,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji chemikaliów organicznych w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing organic chemical production processes to increase quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27763,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji chemikaliów organicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting organic chemical production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_DEZYNFEKTANTÓW = [
            [
                "id" => 27764,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji dezynfektantów, takich jak mieszalniki, reaktory i urządzenia do pakowania.",
                    "en" => "Operating equipment for disinfectant production, such as mixers, reactors, and packaging devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27765,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji dezynfektantów, takimi jak czas, temperatura, ciśnienie.",
                    "en" => "Managing disinfectant production parameters, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27766,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych dezynfektantów, zapewniając odpowiednią skuteczność i bezpieczeństwo.",
                    "en" => "Controlling the quality of produced disinfectants, ensuring proper effectiveness and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27767,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji dezynfektantów, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining disinfectant production equipment, ensuring continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27768,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji dezynfektantów w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the disinfectant production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27769,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji dezynfektantów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the disinfectant production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_GAZÓW_TECZNNICZNYCH = [
            [
                "id" => 27770,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji gazów technicznych, takich jak urządzenia do rozdzielania, oczyszczania i kompresji gazów.",
                    "en" => "Operating equipment for producing technical gases, such as devices for separating, purifying, and compressing gases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27771,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji gazów technicznych, takimi jak ciśnienie, temperatura, czas.",
                    "en" => "Managing technical gas production parameters, such as pressure, temperature, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27772,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych gazów technicznych, zapewniając ich czystość i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of produced technical gases, ensuring their purity and compliance with specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27773,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji gazów technicznych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining technical gas production equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27774,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji gazów technicznych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing technical gas production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27775,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji gazów technicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the technical gas production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KATALIZATORÓW = [
            [
                "id" => 27776,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji katalizatorów, takich jak reaktory i urządzenia do syntez.",
                    "en" => "Operating equipment for producing catalysts, such as reactors and synthesis devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27777,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji katalizatorów, takimi jak czas reakcji, temperatura i ciśnienie.",
                    "en" => "Managing catalyst production parameters, such as reaction time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27778,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych katalizatorów, zapewniając ich odpowiednią aktywność i stabilność.",
                    "en" => "Controlling the quality of produced catalysts, ensuring proper activity and stability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27779,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji katalizatorów, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining catalyst production equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27780,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji katalizatorów w celu poprawy jakości i efektywności produkcji.",
                    "en" => "Optimizing the catalyst production process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27781,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji katalizatorów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the catalyst production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_BITUMICZNYCH = [
            [
                "id" => 27782,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji mas bitumicznych, takich jak mieszalniki, piece i urządzenia do natrysku.",
                    "en" => "Operating equipment for producing bituminous mixtures, such as mixers, ovens, and spraying devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27783,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji mas bitumicznych, takim jak temperatura, czas mieszania i proporcje materiałów.",
                    "en" => "Managing bituminous mixture production parameters, such as temperature, mixing time, and material proportions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27784,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mas bitumicznych, zapewniając ich odpowiednią lepkość, trwałość i odporność na warunki atmosferyczne.",
                    "en" => "Controlling the quality of bituminous mixtures, ensuring proper viscosity, durability, and weather resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27785,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji mas bitumicznych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining equipment for producing bituminous mixtures, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27786,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mas bitumicznych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the production process of bituminous mixtures to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27787,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji mas bitumicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results of bituminous mixtures and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_PÓŁPRZEWODNIKOWYCH = [
            [
                "id" => 27788,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji materiałów półprzewodnikowych, takich jak krystalizatory i piekarniki.",
                    "en" => "Operating equipment for producing semiconductor materials, such as crystallizers and furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27789,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji materiałów półprzewodnikowych, takim jak temperatura, ciśnienie i czas.",
                    "en" => "Managing semiconductor material production parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27790,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów półprzewodnikowych, zapewniając ich odpowiednią czystość i wydajność.",
                    "en" => "Controlling the quality of semiconductor materials, ensuring proper purity and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27791,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji materiałów półprzewodnikowych.",
                    "en" => "Repairing and maintaining equipment for producing semiconductor materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27792,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji materiałów półprzewodnikowych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the semiconductor material production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27793,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji materiałów półprzewodnikowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting semiconductor material production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_WYBUCHOWYCH_I_POKREWNYCH = [
            [
                "id" => 27794,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji materiałów wybuchowych, takich jak mieszalniki, prasy i urządzenia do formowania.",
                    "en" => "Operating equipment for producing explosives, such as mixers, presses, and forming devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27795,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji materiałów wybuchowych, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing parameters of explosive production processes, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27796,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych materiałów wybuchowych, zapewniając odpowiednią siłę, stabilność i bezpieczeństwo.",
                    "en" => "Controlling the quality of produced explosives, ensuring proper strength, stability, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27797,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji materiałów wybuchowych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining equipment for producing explosives, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27798,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji materiałów wybuchowych, w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the explosive production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27799,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji materiałów wybuchowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the explosive production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAWOZÓW_SZTUCZNYCH = [
            [
                "id" => 27800,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji nawozów sztucznych, takich jak reaktory, mieszalniki i prasy do formowania granulatów.",
                    "en" => "Operating equipment for producing artificial fertilizers, such as reactors, mixers, and pelletizing presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27801,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji nawozów sztucznych, takim jak temperatura, ciśnienie, czas.",
                    "en" => "Managing parameters of artificial fertilizer production processes, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27802,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nawozów sztucznych, zapewniając odpowiednią zawartość składników odżywczych i granulację.",
                    "en" => "Controlling the quality of artificial fertilizers, ensuring proper nutrient content and granulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27803,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji nawozów sztucznych.",
                    "en" => "Repairing and maintaining equipment for producing artificial fertilizers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27804,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji nawozów sztucznych, w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the artificial fertilizer production process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27805,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji nawozów sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the artificial fertilizer production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_OŁÓWKÓW = [
            [
                "id" => 27806,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji ołówków, takich jak urządzenia do cięcia drewna, formowania rdzeni i montażu.",
                    "en" => "Operating machines for pencil production, such as equipment for cutting wood, forming cores, and assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27807,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji ołówków, takim jak czas formowania, ciśnienie, prędkość cięcia.",
                    "en" => "Managing pencil production parameters, such as forming time, pressure, and cutting speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27808,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych ołówków, zapewniając odpowiednią długość, twardość i integralność.",
                    "en" => "Controlling the quality of produced pencils, ensuring proper length, hardness, and integrity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27809,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji ołówków.",
                    "en" => "Repairing and maintaining pencil production equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27810,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji ołówków w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the pencil production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27811,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji ołówków oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the pencil production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SADZY = [
            [
                "id" => 27812,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji sadzy, takich jak piece, reaktory i urządzenia do formowania.",
                    "en" => "Operating equipment for producing carbon black, such as furnaces, reactors, and forming devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27813,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji sadzy, takim jak temperatura, czas reakcji, i prędkość przepływu.",
                    "en" => "Managing carbon black production parameters, such as temperature, reaction time, and flow rate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27814,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanej sadzy, zapewniając odpowiednią jakość i czystość.",
                    "en" => "Controlling the quality of produced carbon black, ensuring proper quality and purity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27815,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji sadzy, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining equipment for producing carbon black, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27816,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji sadzy w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the carbon black production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27817,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji sadzy oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the carbon black production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SZTUCZNEJ_SKÓRY = [
            [
                "id" => 27818,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji sztucznej skóry, takich jak maszyny do wytłaczania, formowania i laminowania.",
                    "en" => "Operating equipment for producing artificial leather, such as extrusion, forming, and laminating machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27819,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji sztucznej skóry, takim jak temperatura, prędkość formowania, ciśnienie.",
                    "en" => "Managing artificial leather production parameters, such as temperature, forming speed, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27820,
                "name" => json_encode([
                    "pl" => "Kontrola jakości sztucznej skóry, zapewniając odpowiednią elastyczność, odporność na ścieranie i wytrzymałość.",
                    "en" => "Controlling the quality of artificial leather, ensuring proper flexibility, wear resistance, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27821,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji sztucznej skóry, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining equipment for producing artificial leather, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27822,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji sztucznej skóry w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the artificial leather production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27823,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji sztucznej skóry oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the artificial leather production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ŚRODKÓW_PIORĄCYCH_I_MYJĄCYCH = [
            [
                "id" => 27824,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji środków piorących i myjących, takich jak mieszalniki, dozowniki i urządzenia do pakowania.",
                    "en" => "Operating equipment for producing detergents and cleaning agents, such as mixers, dispensers, and packaging devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27825,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji detergentów, takim jak czas mieszania, temperatura, ciśnienie.",
                    "en" => "Managing detergent production parameters, such as mixing time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27826,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych środków piorących i myjących, zapewniając ich skuteczność i bezpieczeństwo.",
                    "en" => "Controlling the quality of produced detergents and cleaning agents, ensuring effectiveness and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27827,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji środków piorących i myjących, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining equipment for producing detergents and cleaning agents, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27828,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji detergentów w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the detergent production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27829,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji środków piorących i myjących oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the detergent production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WĘGLI_AKTYWNYCH = [
            [
                "id" => 27830,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji węgli aktywnych, takich jak piecze, reaktory i urządzenia do aktywacji.",
                    "en" => "Operating equipment for producing activated carbon, such as furnaces, reactors, and activation devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27831,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji węgli aktywnych, takim jak temperatura, ciśnienie, czas aktywacji.",
                    "en" => "Managing activated carbon production parameters, such as temperature, pressure, and activation time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27832,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanego węgla aktywnego, zapewniając odpowiednią powierzchnię chłonną i skuteczność.",
                    "en" => "Controlling the quality of produced activated carbon, ensuring proper adsorption surface area and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27833,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji węgli aktywnych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining equipment for producing activated carbon, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27834,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji węgli aktywnych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the activated carbon production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27835,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji węgli aktywnych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the activated carbon production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WŁÓKIEN_CHEMICZNYCH = [
            [
                "id" => 27836,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji włókien chemicznych, takich jak maszyny do przędzenia i urządzenia do formowania.",
                    "en" => "Operating equipment for producing chemical fibers, such as spinning machines and forming devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27837,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji włókien chemicznych, takim jak temperatura, prędkość przędzenia i wilgotność.",
                    "en" => "Managing chemical fiber production parameters, such as temperature, spinning speed, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27838,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych włókien chemicznych, zapewniając ich odpowiednią wytrzymałość, elastyczność i jakość.",
                    "en" => "Controlling the quality of produced chemical fibers, ensuring proper strength, flexibility, and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27839,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji włókien chemicznych.",
                    "en" => "Repairing and maintaining equipment for producing chemical fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27840,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji włókien chemicznych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the chemical fiber production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27841,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji włókien chemicznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the chemical fiber production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_FARMACEUTYCZNYCH = [
            [
                "id" => 27842,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji wyrobów farmaceutycznych, takich jak mieszalniki, tabletki, kapsułki, maszyny do pakowania.",
                    "en" => "Operating equipment for producing pharmaceutical products, such as mixers, tablet presses, capsule machines, and packaging devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27843,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji wyrobów farmaceutycznych, takim jak czas, temperatura, ciśnienie, wilgotność.",
                    "en" => "Managing pharmaceutical product production parameters, such as time, temperature, pressure, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27844,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów farmaceutycznych, zapewniając odpowiednią dawkę, czystość i zgodność z normami.",
                    "en" => "Controlling the quality of pharmaceutical products, ensuring proper dosage, purity, and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27845,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji wyrobów farmaceutycznych.",
                    "en" => "Repairing and maintaining equipment for producing pharmaceutical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27846,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów farmaceutycznych, w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the pharmaceutical product production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27847,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów farmaceutycznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the pharmaceutical product production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_KOSMETYCZNYCH = [
            [
                "id" => 27848,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji wyrobów kosmetycznych, takich jak mieszalniki, maszyny do napełniania i pakowania.",
                    "en" => "Operating equipment for producing cosmetic products, such as mixers, filling machines, and packaging devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27849,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji wyrobów kosmetycznych, takim jak temperatura, czas mieszania, ciśnienie.",
                    "en" => "Managing cosmetic product production parameters, such as temperature, mixing time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27850,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów kosmetycznych, zapewniając odpowiednią konsystencję, stabilność i bezpieczeństwo.",
                    "en" => "Controlling the quality of cosmetic products, ensuring proper consistency, stability, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27851,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji wyrobów kosmetycznych.",
                    "en" => "Repairing and maintaining equipment for producing cosmetic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27852,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów kosmetycznych, w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the cosmetic product production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27853,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów kosmetycznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cosmetic product production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU = [
            [
                "id" => 27854,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przeróbki ropy naftowej i gazu, takich jak rafinerie, destylatory i instalacje do przetwarzania.",
                    "en" => "Operating equipment for refining crude oil and gas, such as refineries, distillers, and processing units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27855,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przeróbki ropy naftowej i gazu, takim jak temperatura, ciśnienie, czas.",
                    "en" => "Managing crude oil and gas refining process parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27856,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów przeróbki ropy naftowej i gazu, zapewniając odpowiednią czystość i wydajność.",
                    "en" => "Controlling the quality of refined oil and gas products, ensuring proper purity and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27857,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do przeróbki ropy naftowej i gazu.",
                    "en" => "Repairing and maintaining equipment for refining crude oil and gas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27858,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przeróbki ropy naftowej i gazu w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the oil and gas refining process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27859,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przeróbki ropy naftowej i gazu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the oil and gas refining process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_FILTRUJĄCYCH = [
            [
                "id" => 27860,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń filtrujących, takich jak filtry mechaniczne, chemiczne i elektrostyczne.",
                    "en" => "Operating filtration equipment, such as mechanical, chemical, and electrostatic filters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27861,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami filtracji, takim jak przepływ, temperatura, ciśnienie i czas.",
                    "en" => "Managing filtration parameters, such as flow, temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27862,
                "name" => json_encode([
                    "pl" => "Kontrola jakości filtracji, zapewniając odpowiednią czystość i skuteczność procesu.",
                    "en" => "Controlling the quality of filtration, ensuring proper purity and process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27863,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń filtrujących, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining filtration equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27864,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu filtracji w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the filtration process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27865,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu filtracji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the filtration process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_GRANULUJĄCYCH = [
            [
                "id" => 27866,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń granulujących, takich jak młyny, maszyny do formowania granulek i prasy.",
                    "en" => "Operating granulating equipment, such as mills, pelletizing machines, and presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27867,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu granulacji, takim jak prędkość, temperatura, czas formowania.",
                    "en" => "Managing granulation process parameters, such as speed, temperature, and forming time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27868,
                "name" => json_encode([
                    "pl" => "Kontrola jakości granulowanych produktów, zapewniając odpowiednią wielkość i jednorodność granulek.",
                    "en" => "Controlling the quality of granulated products, ensuring proper size and uniformity of pellets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27869,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do granulowania, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining granulating equipment, ensuring continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27870,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu granulacji w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the granulation process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27871,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu granulacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the granulation process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_HOMOGENIZUJĄCYCH = [
            [
                "id" => 27872,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń homogenizujących, takich jak młyny, maszyny do mieszania i emulsje.",
                    "en" => "Operating homogenizing equipment, such as mills, mixing machines, and emulsifiers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27873,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu homogenizacji, takim jak czas mieszania, prędkość, ciśnienie.",
                    "en" => "Managing homogenization process parameters, such as mixing time, speed, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27874,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów homogenizowanych, zapewniając odpowiednią jednolitość i jakość.",
                    "en" => "Controlling the quality of homogenized products, ensuring proper uniformity and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27875,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń homogenizujących, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining homogenizing equipment, ensuring continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27876,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu homogenizacji w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the homogenization process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27877,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu homogenizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the homogenization process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_KOKSOWNICZYCH = [
            [
                "id" => 27878,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń koksowniczych, takich jak piecze, reaktory i maszyny do formowania węgla.",
                    "en" => "Operating coke oven equipment, such as furnaces, reactors, and coal forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27879,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu koksowania, takim jak temperatura, czas, ciśnienie.",
                    "en" => "Managing coke production parameters, such as temperature, time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27880,
                "name" => json_encode([
                    "pl" => "Kontrola jakości koksu, zapewniając odpowiednią odporność, twardość i porowatość.",
                    "en" => "Controlling the quality of coke, ensuring proper hardness, strength, and porosity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27881,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń koksowniczych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining coke oven equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27882,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu koksowania, w celu poprawy jakości i wydajności produkcji koksu.",
                    "en" => "Optimizing the coking process to improve quality and coke production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27883,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu koksowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the coking process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_MIESZAJĄCYCH = [
            [
                "id" => 27884,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń mieszających, takich jak mieszalniki, maszyny do mieszania chemikaliów i składników.",
                    "en" => "Operating mixing equipment, such as mixers, machines for blending chemicals and ingredients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27885,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu mieszania, takim jak czas mieszania, prędkość, temperatura.",
                    "en" => "Managing mixing process parameters, such as mixing time, speed, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27886,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mieszanych produktów, zapewniając odpowiednią jednorodność i skład.",
                    "en" => "Controlling the quality of mixed products, ensuring proper uniformity and composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27887,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń mieszających, zapewniając ich ciągłą sprawność operacyjną.",
                    "en" => "Repairing and maintaining mixing equipment, ensuring continuous operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27888,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu mieszania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the mixing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27889,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu mieszania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the mixing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_ROZDRABNIAJĄCECH = [
            [
                "id" => 27890,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń rozdrabniających, takich jak młyny, kruszarki i maszyny do cięcia.",
                    "en" => "Operating crushing equipment, such as mills, crushers, and cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27891,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu rozdrabniania, takim jak ciśnienie, czas, wielkość cząstek.",
                    "en" => "Managing crushing process parameters, such as pressure, time, and particle size."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27892,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów rozdrabnianych, zapewniając odpowiednią wielkość cząstek i jednorodność.",
                    "en" => "Controlling the quality of crushed products, ensuring proper particle size and uniformity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27893,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń rozdrabniających, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining crushing equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27894,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rozdrabniania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the crushing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27895,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu rozdrabniania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the crushing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_SORPCYJNYCH = [
            [
                "id" => 27896,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń sorpcyjnych, takich jak kolumny sorpcyjne i urządzenia do absorpcji gazów.",
                    "en" => "Operating sorption equipment, such as absorption columns and gas absorption devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27897,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu sorpcji, takim jak ciśnienie, temperatura, przepływ gazu.",
                    "en" => "Managing sorption process parameters, such as pressure, temperature, and gas flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27898,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu sorpcji, zapewniając odpowiednią skuteczność usuwania gazów.",
                    "en" => "Controlling the quality of the sorption process, ensuring proper gas removal efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27899,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń sorpcyjnych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining sorption equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27900,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sorpcji w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the sorption process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27901,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu sorpcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the sorption process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WYPARENYCH = [
            [
                "id" => 27902,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń wyparnych, takich jak aparaty do destylacji, odparowania i suszenia.",
                    "en" => "Operating evaporation equipment, such as distillation, evaporation, and drying apparatus."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27903,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wyparnia, takim jak temperatura, ciśnienie, czas.",
                    "en" => "Managing evaporation process parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27904,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów po procesie wyparnia, zapewniając ich czystość i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of products after evaporation, ensuring their purity and compliance with specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27905,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wyparnych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining evaporation equipment, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27906,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wyparnia, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the evaporation process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27907,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wyparnia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the evaporation process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_WIRÓWEK = [
            [
                "id" => 27908,
                "name" => json_encode([
                    "pl" => "Obsługa wirówek, takich jak maszyny do rozdzielania substancji na podstawie gęstości.",
                    "en" => "Operating centrifuges, such as machines for separating substances based on density."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27909,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pracy wirówek, takim jak prędkość, czas obrotu, temperatura.",
                    "en" => "Managing centrifuge operating parameters, such as speed, rotation time, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27910,
                "name" => json_encode([
                    "pl" => "Kontrola jakości rozdzielanych substancji, zapewniając odpowiednią czystość i separację.",
                    "en" => "Controlling the quality of separated substances, ensuring proper purity and separation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27911,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wirówek, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining centrifuges, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27912,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wirówki w celu zwiększenia jakości i efektywności.",
                    "en" => "Optimizing the centrifuge process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27913,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wirówek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the centrifuge process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOKAŻOWY = [
            [
                "id" => 27914,
                "name" => json_encode([
                    "pl" => "Zarządzanie i kontrolowanie zapasów materiałów, produktów i surowców w magazynie.",
                    "en" => "Managing and controlling the stock of materials, products, and raw materials in the warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27915,
                "name" => json_encode([
                    "pl" => "Obsługa systemów magazynowych, takich jak urządzenia do załadunku i rozładunku towarów.",
                    "en" => "Operating warehouse systems, such as equipment for loading and unloading goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27916,
                "name" => json_encode([
                    "pl" => "Kontrola stanu zapasów, w tym monitorowanie dat ważności i rotacji towarów.",
                    "en" => "Controlling stock levels, including monitoring expiration dates and product rotation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27917,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń magazynowych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining warehouse equipment, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27918,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów magazynowych, aby zwiększyć efektywność i zmniejszyć koszty.",
                    "en" => "Optimizing warehouse processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27919,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu magazynowania oraz raportowanie wyników.",
                    "en" => "Documenting warehouse process results and reporting on outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CHEMICZNYCH = [
            [
                "id" => 27920,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn i urządzeń w produkcji chemikaliów, takich jak systemy dozowania, maszyny mieszające.",
                    "en" => "Operating other machines and equipment in chemical production, such as dosing systems, mixing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27921,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji chemicznej, w tym kontrola jakości i efektywności.",
                    "en" => "Managing chemical production process parameters, including quality control and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27922,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn oraz urządzeń do produkcji chemikaliów.",
                    "en" => "Repairing and maintaining machines and equipment for chemical production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27923,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji chemicznych, w celu zwiększenia wydajności i redukcji kosztów.",
                    "en" => "Optimizing chemical production processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27924,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów chemicznych, zapewniając odpowiednią czystość i zgodność z normami.",
                    "en" => "Controlling the quality of chemical products, ensuring proper purity and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27925,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji chemikaliów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting chemical production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CHEMICZNEGO = [
            [
                "id" => 27926,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń przemysłu chemicznego, takich jak reaktory, mieszalniki, piece i urządzenia filtracyjne.",
                    "en" => "Operating chemical industry equipment, such as reactors, mixers, furnaces, and filtration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27927,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów przemysłowych, takim jak ciśnienie, temperatura, czas reakcji.",
                    "en" => "Managing industrial process parameters, such as pressure, temperature, and reaction time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27928,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów przemysłowych, zapewniając ich zgodność z normami jakości.",
                    "en" => "Controlling the quality of industrial products, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27929,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń przemysłowych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining industrial equipment, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27930,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przemysłowych w celu zwiększenia wydajności i redukcji kosztów.",
                    "en" => "Optimizing industrial processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27931,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów przemysłowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting industrial process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MINILABU_FOTOGRAFICZNEGO = [
            [
                "id" => 27932,
                "name" => json_encode([
                    "pl" => "Obsługa minilabu fotograficznego, w tym urządzeń do wywoływania zdjęć, przechowywania i drukowania obrazów.",
                    "en" => "Operating a photographic minilab, including equipment for developing photos, storing, and printing images."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27933,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wywoływania zdjęć, takim jak czas ekspozycji, temperatura i chemikalia.",
                    "en" => "Managing photo developing process parameters, such as exposure time, temperature, and chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27934,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wywołanych zdjęć, zapewniając odpowiednią ostrość, kontrast i ekspozycję.",
                    "en" => "Controlling the quality of developed photos, ensuring proper sharpness, contrast, and exposure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27935,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja minilabu fotograficznego, zapewniając jego sprawność operacyjną.",
                    "en" => "Repairing and maintaining the photographic minilab, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27936,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wywoływania zdjęć, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the photo development process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27937,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wywoływania zdjęć oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the photo development process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_BŁON_I_FILMÓW_FOTOGRAFICZNYCH = [
            [
                "id" => 27938,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki błon i filmów fotograficznych, w tym wywoływarki, suszarki i maszyny do cięcia.",
                    "en" => "Operating equipment for processing photographic films and sheets, including developers, dryers, and cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27939,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki filmów, takim jak czas wywoływania, temperatura, chemikalia.",
                    "en" => "Managing film processing parameters, such as developing time, temperature, and chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27940,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wywołanych filmów, zapewniając odpowiednią ekspozycję i ostrość obrazu.",
                    "en" => "Controlling the quality of developed films, ensuring proper exposure and image sharpness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27941,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do obróbki filmów, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining film processing equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27942,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki filmów fotograficznych, w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the photographic film processing to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27943,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki filmów fotograficznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting photographic film processing results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚWIATŁOCZUŁYCH_I_OBRÓBKI_FILMÓW = [
            [
                "id" => 27944,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji materiałów światłoczułych i obróbki filmów, takich jak maszyny do naświetlania, ekspozycji i wywoływania.",
                    "en" => "Operating equipment for producing light-sensitive materials and processing films, such as exposure, developing, and imaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27945,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji materiałów światłoczułych i filmów, takim jak czas naświetlania, temperatura, chemikalia.",
                    "en" => "Managing light-sensitive material and film production process parameters, such as exposure time, temperature, and chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27946,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów światłoczułych i filmów, zapewniając odpowiednią ekspozycję, kontrast i ostrość.",
                    "en" => "Controlling the quality of light-sensitive materials and films, ensuring proper exposure, contrast, and sharpness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27947,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji materiałów światłoczułych i obróbki filmów.",
                    "en" => "Repairing and maintaining equipment for producing light-sensitive materials and film processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27948,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji materiałów światłoczułych i obróbki filmów, w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing light-sensitive material production and film processing to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27949,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji materiałów światłoczułych oraz obróbki filmów i raportowanie wyników.",
                    "en" => "Documenting the production of light-sensitive materials and film processing results and reporting on outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $APARATOWY_PRODUKCJI_WYROBÓW_MACZANYCH = [
            [
                "id" => 27950,
                "name" => json_encode([
                    "pl" => "Obsługa aparatów do produkcji wyrobów maczanych, takich jak maszyny do zanurzania materiałów w cieczy.",
                    "en" => "Operating equipment for the production of dipped products, such as machines for immersing materials in liquids."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27951,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji wyrobów maczanych, takim jak czas maczania, temperatura, ciśnienie.",
                    "en" => "Managing the parameters of the dipped products production process, such as immersion time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27952,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów maczanych, zapewniając odpowiednią grubość powłok i wytrzymałość materiałów.",
                    "en" => "Controlling the quality of dipped products, ensuring proper coating thickness and material durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27953,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja aparatów do produkcji wyrobów maczanych, zapewniając ich ciągłą sprawność.",
                    "en" => "Repairing and maintaining equipment for the production of dipped products, ensuring continuous operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27954,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów maczanych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the dipped products production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27955,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów maczanych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the dipped products production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_WULKANIZACJI = [
            [
                "id" => 27956,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wulkanizacji, takich jak piece, pras i maszyny do wulkanizowania gumy.",
                    "en" => "Operating vulcanization equipment, such as ovens, presses, and machines for vulcanizing rubber."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27957,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wulkanizacji, takim jak temperatura, czas, ciśnienie.",
                    "en" => "Managing vulcanization process parameters, such as temperature, time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27958,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gumy wulkanizowanej, zapewniając odpowiednią twardość, elastyczność i odporność.",
                    "en" => "Controlling the quality of vulcanized rubber, ensuring proper hardness, flexibility, and resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27959,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wulkanizacyjnych, zapewniając ich prawidłowe działanie.",
                    "en" => "Repairing and maintaining vulcanization equipment, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27960,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wulkanizacji w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the vulcanization process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27961,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wulkanizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the vulcanization process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_SUROWCÓW_GUMOWYCH = [
            [
                "id" => 27962,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przetwórstwa surowców gumowych, takich jak mieszalniki, wytłaczarki i maszyny do rozdrabniania gumy.",
                    "en" => "Operating equipment for processing rubber raw materials, such as mixers, extruders, and rubber shredding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27963,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przetwórstwa gumy, takim jak czas, temperatura, wilgotność.",
                    "en" => "Managing rubber processing parameters, such as time, temperature, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27964,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców gumowych, zapewniając odpowiednią gładkość, elastyczność i jednorodność.",
                    "en" => "Controlling the quality of rubber raw materials, ensuring proper smoothness, flexibility, and uniformity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27965,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do przetwórstwa surowców gumowych.",
                    "en" => "Repairing and maintaining equipment for processing rubber raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27966,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przetwórstwa gumy w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the rubber processing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27967,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przetwórstwa surowców gumowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting rubber processing results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WULKANIZATOR = [
            [
                "id" => 27968,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wulkanizacji gumy, takich jak piece wulkanizacyjne i prasy.",
                    "en" => "Operating equipment for vulcanizing rubber, such as vulcanization ovens and presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27969,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wulkanizacji, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing vulcanization process parameters, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27970,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wulkanizowanej gumy, zapewniając odpowiednią twardość, elastyczność i odporność na ścieranie.",
                    "en" => "Controlling the quality of vulcanized rubber, ensuring proper hardness, flexibility, and wear resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27971,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wulkanizacyjnych.",
                    "en" => "Repairing and maintaining vulcanization equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27972,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wulkanizacji w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the vulcanization process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27973,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wulkanizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the vulcanization process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WULKANIZATOR_TAŚM_PRZENOSNIKOWYCH = [
            [
                "id" => 27974,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wulkanizacji taśm przenośnikowych, takich jak piece wulkanizacyjne i prasy taśmowe.",
                    "en" => "Operating equipment for vulcanizing conveyor belts, such as vulcanization ovens and belt presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27975,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wulkanizacji taśm przenośnikowych, takim jak czas, temperatura i ciśnienie.",
                    "en" => "Managing the vulcanization process parameters for conveyor belts, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27976,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wulkanizowanych taśm przenośnikowych, zapewniając ich odpowiednią elastyczność, trwałość i wytrzymałość.",
                    "en" => "Controlling the quality of vulcanized conveyor belts, ensuring proper flexibility, durability, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27977,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wulkanizacyjnych do taśm przenośnikowych.",
                    "en" => "Repairing and maintaining vulcanization equipment for conveyor belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27978,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wulkanizacji taśm przenośnikowych w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the vulcanization process for conveyor belts to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27979,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wulkanizacji taśm przenośnikowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the vulcanization process results for conveyor belts and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_GUMOWYCH = [
            [
                "id" => 27980,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn do produkcji wyrobów gumowych, takich jak maszyny do cięcia, wytłaczania i formowania gumy.",
                    "en" => "Operating other machines for producing rubber products, such as cutting, extruding, and molding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27981,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów produkcji wyrobów gumowych, takim jak ciśnienie, temperatura i czas wytwarzania.",
                    "en" => "Managing rubber product production process parameters, such as pressure, temperature, and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27982,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów gumowych, zapewniając odpowiednią twardość, elastyczność i trwałość.",
                    "en" => "Controlling the quality of rubber products, ensuring proper hardness, flexibility, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27983,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji wyrobów gumowych.",
                    "en" => "Repairing and maintaining machines for rubber product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27984,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów gumowych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the rubber product production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27985,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów gumowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting rubber product production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMIERZ_WYROBÓW_Z_KOMPOZYTÓW_POLIMEROWYCH = [
            [
                "id" => 27986,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania wyrobów z kompozytów polimerowych, takich jak prasy, formy i maszyny do wytłaczania.",
                    "en" => "Operating equipment for molding polymer composite products, such as presses, molds, and extrusion machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27987,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu formowania wyrobów z kompozytów polimerowych, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing molding process parameters for polymer composite products, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27988,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów z kompozytów polimerowych, zapewniając odpowiednią wytrzymałość, elastyczność i odporność.",
                    "en" => "Controlling the quality of polymer composite products, ensuring proper strength, flexibility, and resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27989,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do formowania wyrobów z kompozytów polimerowych.",
                    "en" => "Repairing and maintaining equipment for molding polymer composite products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27990,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania wyrobów z kompozytów polimerowych w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the molding process for polymer composite products to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27991,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania wyrobów z kompozytów polimerowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the molding process results for polymer composite products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMOWACZ_ORTOPEDYCZNYCH_WYROBÓW_Z_TWORZYW = [
            [
                "id" => 27992,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania ortopedycznych wyrobów z tworzyw, takich jak formy, prasy i maszyny do wytłaczania.",
                    "en" => "Operating equipment for molding orthopedic products from plastics, such as molds, presses, and extrusion machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27993,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu formowania ortopedycznych wyrobów z tworzyw, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing molding process parameters for orthopedic products made of plastics, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27994,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ortopedycznych wyrobów z tworzyw, zapewniając ich odpowiednią twardość, elastyczność i dopasowanie.",
                    "en" => "Controlling the quality of orthopedic products made of plastics, ensuring proper hardness, flexibility, and fitting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27995,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do formowania ortopedycznych wyrobów z tworzyw.",
                    "en" => "Repairing and maintaining equipment for molding orthopedic products from plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27996,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania ortopedycznych wyrobów z tworzyw w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the molding process for orthopedic products made of plastics to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27997,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania ortopedycznych wyrobów z tworzyw oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the molding process results for orthopedic products made of plastics and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ODLEWNIK_WYROBÓW_Z_MATERIAŁÓW_POLIMEROWYCH = [
            [
                "id" => 27998,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do odlewania wyrobów z materiałów polimerowych, takich jak formy, piece i maszyny do rozlewu.",
                    "en" => "Operating equipment for casting polymer products, such as molds, furnaces, and pouring machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27999,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu odlewania wyrobów z materiałów polimerowych, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing casting process parameters for polymer products, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28000,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odlewów z materiałów polimerowych, zapewniając odpowiednią twardość, elastyczność i wytrzymałość.",
                    "en" => "Controlling the quality of polymer material castings, ensuring proper hardness, flexibility, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28001,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do odlewania wyrobów z materiałów polimerowych.",
                    "en" => "Repairing and maintaining equipment for casting polymer products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28002,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu odlewania wyrobów z materiałów polimerowych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the casting process for polymer products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28003,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu odlewania wyrobów z materiałów polimerowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the casting process results for polymer products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OKIEN_Z_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28004,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji okien z tworzyw sztucznych, takich jak maszyny do cięcia, łączenia i formowania.",
                    "en" => "Operating equipment for producing plastic windows, such as cutting, joining, and molding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28005,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji okien, takim jak czas, temperatura i ciśnienie.",
                    "en" => "Managing production process parameters for windows, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28006,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych okien, zapewniając odpowiednią szczelność, wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of produced windows, ensuring proper tightness, durability, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28007,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji okien z tworzyw sztucznych.",
                    "en" => "Repairing and maintaining equipment for producing plastic windows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28008,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji okien z tworzyw sztucznych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the plastic window production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28009,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji okien oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the plastic window production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_CIĘCIA_FOLII_I_PŁYT = [
            [
                "id" => 28010,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do cięcia folii i płyt, takich jak maszyny tnące, noże i plotery.",
                    "en" => "Operating equipment for cutting films and sheets, such as cutting machines, knives, and plotters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28011,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu cięcia, takim jak prędkość cięcia, ciśnienie, i dokładność.",
                    "en" => "Managing cutting process parameters, such as cutting speed, pressure, and accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28012,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ciętych folii i płyt, zapewniając odpowiednią równość cięcia i brak defektów.",
                    "en" => "Controlling the quality of cut films and sheets, ensuring proper cutting uniformity and defect-free surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28013,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do cięcia folii i płyt.",
                    "en" => "Repairing and maintaining equipment for cutting films and sheets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28014,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia folii i płyt, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the cutting process for films and sheets to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28015,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu cięcia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cutting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_Z_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28016,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania wyrobów z tworzyw sztucznych, takich jak wtryskarki, maszyny do wytłaczania i formowania.",
                    "en" => "Operating equipment for molding plastic products, such as injection molding machines, extrusion machines, and forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28017,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu formowania wyrobów z tworzyw sztucznych, takim jak ciśnienie, temperatura, czas.",
                    "en" => "Managing molding process parameters for plastic products, such as pressure, temperature, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28018,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych wyrobów z tworzyw sztucznych, zapewniając odpowiednią wytrzymałość, estetykę i tolerancje wymiarowe.",
                    "en" => "Controlling the quality of molded plastic products, ensuring proper strength, aesthetics, and dimensional tolerances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28019,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do formowania wyrobów z tworzyw sztucznych.",
                    "en" => "Repairing and maintaining equipment for molding plastic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28020,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania wyrobów z tworzyw sztucznych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the molding process for plastic products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28021,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania wyrobów z tworzyw sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the molding process results for plastic products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_SPIENIANIA_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28022,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do spieniania tworzyw sztucznych, takich jak maszyny do wytwarzania piany i mieszalniki.",
                    "en" => "Operating equipment for foaming plastic materials, such as foam generating machines and mixers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28023,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu spieniania, takim jak temperatura, ciśnienie, czas mieszania.",
                    "en" => "Managing foaming process parameters, such as temperature, pressure, and mixing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28024,
                "name" => json_encode([
                    "pl" => "Kontrola jakości spienianych tworzyw sztucznych, zapewniając odpowiednią gęstość i strukturę pianki.",
                    "en" => "Controlling the quality of foamed plastics, ensuring proper foam density and structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28025,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do spieniania tworzyw sztucznych.",
                    "en" => "Repairing and maintaining equipment for foaming plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28026,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu spieniania tworzyw sztucznych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the foaming process for plastics to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28027,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu spieniania tworzyw sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the foaming process results for plastics and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_WTRYSKARKI = [
            [
                "id" => 28028,
                "name" => json_encode([
                    "pl" => "Obsługa wtryskarki, urządzeń do formowania wyrobów z tworzyw sztucznych poprzez wtryskiwanie materiału do formy.",
                    "en" => "Operating an injection molding machine, equipment for forming plastic products by injecting material into molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28029,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wtryskiwania, takim jak temperatura, ciśnienie, czas i prędkość wtrysku.",
                    "en" => "Managing injection molding process parameters, such as temperature, pressure, time, and injection speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28030,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów formowanych wtryskowo, zapewniając odpowiednią wytrzymałość, tolerancje wymiarowe i estetykę.",
                    "en" => "Controlling the quality of injection-molded products, ensuring proper strength, dimensional tolerances, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28031,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wtryskarki oraz innych urządzeń produkcyjnych.",
                    "en" => "Repairing and maintaining injection molding machines and other production equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28032,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wtryskiwania w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the injection molding process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28033,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wtryskiwania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the injection molding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28034,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa tworzyw sztucznych, takich jak wtryskarki, maszyny do wytłaczania i formowania.",
                    "en" => "Operating machines for processing plastics, such as injection molding machines, extrusion machines, and forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28035,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przetwórstwa tworzyw sztucznych, takim jak temperatura, ciśnienie, czas wytłaczania.",
                    "en" => "Managing plastic processing parameters, such as temperature, pressure, and extrusion time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28036,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów z tworzyw sztucznych, zapewniając odpowiednią jakość, grubość i tolerancje wymiarowe.",
                    "en" => "Controlling the quality of plastic products, ensuring proper quality, thickness, and dimensional tolerances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28037,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn i urządzeń do przetwórstwa tworzyw sztucznych.",
                    "en" => "Repairing and maintaining machines and equipment for processing plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28038,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przetwórstwa tworzyw sztucznych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing plastic processing to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28039,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przetwórstwa tworzyw sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting plastic processing results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28040,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn do produkcji wyrobów z tworzyw sztucznych, takich jak urządzenia do cięcia, wytłaczania i formowania.",
                    "en" => "Operating other machines for producing plastic products, such as cutting, extruding, and molding devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28041,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji wyrobów z tworzyw sztucznych, takim jak ciśnienie, temperatura i czas produkcji.",
                    "en" => "Managing plastic product production process parameters, such as pressure, temperature, and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28042,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów z tworzyw sztucznych, zapewniając ich odpowiednią trwałość, estetykę i funkcjonalność.",
                    "en" => "Controlling the quality of plastic products, ensuring their durability, aesthetics, and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28043,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji wyrobów z tworzyw sztucznych.",
                    "en" => "Repairing and maintaining plastic product production equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28044,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów z tworzyw sztucznych, aby zwiększyć wydajność i poprawić jakość.",
                    "en" => "Optimizing plastic product production processes to increase efficiency and improve quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28045,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów z tworzyw sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting plastic product production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_KALANDRÓW_WYROBÓW_PAPIEROWYCH = [
            [
                "id" => 28046,
                "name" => json_encode([
                    "pl" => "Obsługa kalandrów do produkcji wyrobów papierowych, takich jak maszyny do prasowania i formowania papieru.",
                    "en" => "Operating calenders for paper product production, such as machines for pressing and forming paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28047,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu kalandrowania, takim jak temperatura, ciśnienie, czas.",
                    "en" => "Managing calendering process parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28048,
                "name" => json_encode([
                    "pl" => "Kontrola jakości papieru po procesie kalandrowania, zapewniając odpowiednią grubość, gładkość i wytrzymałość.",
                    "en" => "Controlling the quality of paper after calendering, ensuring proper thickness, smoothness, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28049,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja kalandrów do produkcji wyrobów papierowych.",
                    "en" => "Repairing and maintaining calenders for paper product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28050,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu kalandrowania w celu zwiększenia jakości i wydajności produkcji papieru.",
                    "en" => "Optimizing the calendering process to improve the quality and efficiency of paper production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28051,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu kalandrowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the calendering process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_LINII_DO_BELOWANIA_MAKULATURY = [
            [
                "id" => 28052,
                "name" => json_encode([
                    "pl" => "Obsługa linii do belowania makulatury, w tym maszyny do prasowania i pakowania papieru.",
                    "en" => "Operating the baling line for waste paper, including machines for pressing and packaging paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28053,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu belowania, takim jak ciśnienie, czas prasowania, ilość materiału.",
                    "en" => "Managing baling process parameters, such as pressure, pressing time, and material quantity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28054,
                "name" => json_encode([
                    "pl" => "Kontrola jakości belowanej makulatury, zapewniając odpowiednią gęstość, wielkość i stan materiału.",
                    "en" => "Controlling the quality of baled waste paper, ensuring proper density, size, and material condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28055,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do belowania makulatury.",
                    "en" => "Repairing and maintaining waste paper baling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28056,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu belowania makulatury w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing the waste paper baling process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28057,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu belowania makulatury oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the waste paper baling process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYNY_ODWADNIAJĄCEJ_CELOZĘ = [
            [
                "id" => 28058,
                "name" => json_encode([
                    "pl" => "Obsługa maszyny odwadniającej celulozę, w tym maszyny do ekstrakcji wody z surowca.",
                    "en" => "Operating the cellulose dewatering machine, including machines for extracting water from the raw material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28059,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu odwadniania celulozy, takim jak ciśnienie, czas, temperatura.",
                    "en" => "Managing the cellulose dewatering process parameters, such as pressure, time, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28060,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odwadnianej celulozy, zapewniając odpowiednią wilgotność i czystość materiału.",
                    "en" => "Controlling the quality of dewatered cellulose, ensuring proper moisture content and material purity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28061,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyny odwadniającej celulozę.",
                    "en" => "Repairing and maintaining the cellulose dewatering machine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28062,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu odwadniania celulozy, w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the cellulose dewatering process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28063,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu odwadniania celulozy oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cellulose dewatering process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYNY_PAPIERNICZEJ = [
            [
                "id" => 28064,
                "name" => json_encode([
                    "pl" => "Obsługa maszyny papierniczej, w tym urządzeń do produkcji papieru, takich jak maszyny do formowania, suszenia i cięcia.",
                    "en" => "Operating paper machine equipment, including machines for forming, drying, and cutting paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28065,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji papieru, takim jak czas, temperatura, wilgotność i prędkość maszyny.",
                    "en" => "Managing the paper production process parameters, such as time, temperature, humidity, and machine speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28066,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanego papieru, zapewniając odpowiednią gramaturę, gładkość i wytrzymałość.",
                    "en" => "Controlling the quality of produced paper, ensuring proper weight, smoothness, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28067,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyny papierniczej oraz urządzeń pomocniczych.",
                    "en" => "Repairing and maintaining the paper machine and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28068,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji papieru, w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the paper production process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28069,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji papieru oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the paper production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYNY_TEKTURNICZEJ = [
            [
                "id" => 28070,
                "name" => json_encode([
                    "pl" => "Obsługa maszyny tekturniczej, w tym urządzeń do produkcji tektury, takich jak maszyny do formowania i cięcia tektury.",
                    "en" => "Operating corrugating machine equipment, including machines for forming and cutting cardboard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28071,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji tektury, takim jak ciśnienie, temperatura, prędkość i jakość materiału.",
                    "en" => "Managing the corrugated board production process parameters, such as pressure, temperature, speed, and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28072,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanej tektury, zapewniając odpowiednią grubość, twardość i wytrzymałość.",
                    "en" => "Controlling the quality of produced cardboard, ensuring proper thickness, hardness, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28073,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyny tekturniczej oraz urządzeń pomocniczych.",
                    "en" => "Repairing and maintaining the corrugating machine and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28074,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji tektury, w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the corrugated board production process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28075,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji tektury oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the corrugated board production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PERGAMINIARKI = [
            [
                "id" => 28076,
                "name" => json_encode([
                    "pl" => "Obsługa pergaminiarki, maszyny do produkcji pergaminu, polegającego na obróbce papieru w celu uzyskania większej przezroczystości.",
                    "en" => "Operating the parchmenting machine, a machine used for processing paper to achieve greater transparency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28077,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu pergaminowania, takim jak temperatura, czas i wilgotność.",
                    "en" => "Managing the parchmenting process parameters, such as temperature, time, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28078,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pergaminu, zapewniając odpowiednią przezroczystość i elastyczność.",
                    "en" => "Controlling the quality of parchment, ensuring proper transparency and flexibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28079,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pergaminiarki, zapewniając jej prawidłowe działanie.",
                    "en" => "Repairing and maintaining the parchmenting machine, ensuring its proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28080,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu pergaminowania, w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the parchmenting process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28081,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu pergaminowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the parchmenting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_BIELĄCYCH_MASY_WŁÓKNISTE = [
            [
                "id" => 28082,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do bielenia masy włóknistej, takich jak maszyny do chlorowania, wybielania chemicznego i odbarwiania.",
                    "en" => "Operating equipment for bleaching fiber pulp, such as chlorination, chemical bleaching, and decolorization machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28083,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu bielenia, takim jak stężenie chemikaliów, czas reakcji i temperatura.",
                    "en" => "Managing bleaching process parameters, such as chemical concentration, reaction time, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28084,
                "name" => json_encode([
                    "pl" => "Kontrola jakości bielonej masy włóknistej, zapewniając odpowiednią jasność i jakość materiału.",
                    "en" => "Controlling the quality of bleached fiber pulp, ensuring proper brightness and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28085,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń bielących masę włóknistą.",
                    "en" => "Repairing and maintaining equipment for bleaching fiber pulp."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28086,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu bielenia masy włóknistej w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the fiber pulp bleaching process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28087,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu bielenia masy włóknistej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the fiber pulp bleaching process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_IMPREGNOWANIA_I_POWLEKANIA_WYROBÓW_PAPIEROWYCH = [
            [
                "id" => 28088,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do impregnowania i powlekania wyrobów papierowych, takich jak maszyny do nanoszenia powłok ochronnych.",
                    "en" => "Operating equipment for impregnating and coating paper products, such as machines for applying protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28089,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu impregnacji i powlekania, takim jak czas, temperatura i rodzaj powłoki.",
                    "en" => "Managing impregnation and coating process parameters, such as time, temperature, and type of coating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28090,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powlekanych wyrobów papierowych, zapewniając odpowiednią grubość powłoki i jej przyczepność.",
                    "en" => "Controlling the quality of coated paper products, ensuring proper coating thickness and adhesion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28091,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do impregnacji i powlekania wyrobów papierowych.",
                    "en" => "Repairing and maintaining equipment for impregnating and coating paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28092,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu impregnacji i powlekania wyrobów papierowych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the impregnation and coating process for paper products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28093,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu impregnacji i powlekania wyrobów papierowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the impregnation and coating process results for paper products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_MIELENIA_MASY_WŁÓKNISTEJ = [
            [
                "id" => 28094,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do mielenia masy włóknistej, takich jak młyny i maszyny do rozdrabniania surowca.",
                    "en" => "Operating equipment for grinding fiber pulp, such as mills and machines for shredding raw material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28095,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu mielenia, takim jak czas mielenia, prędkość obrotowa i temperatura.",
                    "en" => "Managing grinding process parameters, such as grinding time, rotation speed, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28096,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mielonej masy włóknistej, zapewniając odpowiednią jednorodność i konsystencję.",
                    "en" => "Controlling the quality of ground fiber pulp, ensuring proper uniformity and consistency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28097,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do mielenia masy włóknistej.",
                    "en" => "Repairing and maintaining equipment for grinding fiber pulp."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28098,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu mielenia masy włóknistej, w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the fiber pulp grinding process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28099,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu mielenia masy włóknistej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the fiber pulp grinding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWYWANIA_I_DOZOWANIA_DODATKÓW_MASOWYCH = [
            [
                "id" => 28100,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przygotowywania i dozowania dodatków masowych, takich jak mieszalniki, wagi i systemy dozujące.",
                    "en" => "Operating equipment for preparing and dosing bulk additives, such as mixers, scales, and dosing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28101,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu dozowania dodatków masowych, takim jak tempo, czas i dokładność dozowania.",
                    "en" => "Managing bulk additives dosing process parameters, such as rate, time, and dosing accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28102,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przygotowywanych dodatków masowych, zapewniając odpowiednią jakość i konsystencję.",
                    "en" => "Controlling the quality of prepared bulk additives, ensuring proper quality and consistency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28103,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do przygotowywania i dozowania dodatków masowych.",
                    "en" => "Repairing and maintaining equipment for preparing and dosing bulk additives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28104,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowywania i dozowania dodatków masowych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the process of preparing and dosing bulk additives to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28105,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przygotowywania i dozowania dodatków masowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the process of preparing and dosing bulk additives and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_SCIERANIA_DREWNA = [
            [
                "id" => 28106,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do ścierania drewna, takich jak maszyny do szlifowania, strugania i wygładzania powierzchni drewna.",
                    "en" => "Operating equipment for grinding wood, such as sanding, planing, and smoothing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28107,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu ścierania drewna, takim jak prędkość, ciśnienie i temperatura.",
                    "en" => "Managing the wood grinding process parameters, such as speed, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28108,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ścieranych powierzchni drewna, zapewniając odpowiednią gładkość, wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of ground wood surfaces, ensuring proper smoothness, durability, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28109,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do ścierania drewna.",
                    "en" => "Repairing and maintaining wood grinding equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28110,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ścierania drewna w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the wood grinding process to improve production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28111,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ścierania drewna oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the wood grinding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_RĘBALNI_DREWNA = [
            [
                "id" => 28112,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń w rębalni drewna, takich jak maszyny do obróbki drewna na surowo, cięcia, łamania i rozdzielania.",
                    "en" => "Operating equipment in wood peeling, such as machines for rough wood processing, cutting, breaking, and splitting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28113,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki drewna w rębalni, takim jak czas, ciśnienie i temperatura.",
                    "en" => "Managing wood processing parameters in peeling, such as time, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28114,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrabianego drewna, zapewniając odpowiednią grubość, czystość i równość powierzchni.",
                    "en" => "Controlling the quality of processed wood, ensuring proper thickness, cleanliness, and surface evenness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28115,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń w rębalni drewna.",
                    "en" => "Repairing and maintaining wood peeling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28116,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki drewna w rębalni, w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing wood processing in peeling to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28117,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki drewna w rębalni oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the wood processing results in peeling and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_ROZWŁÓKNIENIA = [
            [
                "id" => 28118,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do rozwłókniania drewna i masy włóknistej, takich jak młyny i maszyny rozwłókniacz.",
                    "en" => "Operating equipment for fiberizing wood and pulp, such as mills and fiberizer machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28119,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu rozwłókniania, takim jak czas, ciśnienie, i prędkość obrotowa urządzeń.",
                    "en" => "Managing fiberizing process parameters, such as time, pressure, and rotational speed of the equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28120,
                "name" => json_encode([
                    "pl" => "Kontrola jakości rozwłóknionej masy, zapewniając odpowiednią jednorodność i czystość materiału.",
                    "en" => "Controlling the quality of fiberized pulp, ensuring proper uniformity and material cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28121,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do rozwłókniania drewna i masy włóknistej.",
                    "en" => "Repairing and maintaining equipment for fiberizing wood and pulp."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28122,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rozwłókniania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the fiberizing process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28123,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu rozwłókniania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the fiberizing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WARZELNI = [
            [
                "id" => 28124,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń warzelni, takich jak maszyny do gotowania masy włóknistej, w celu uzyskania odpowiednich właściwości papieru.",
                    "en" => "Operating brewing equipment, such as machines for boiling fiber pulp to achieve proper paper properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28125,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu warzenia, takim jak czas, temperatura, i skład chemiczny.",
                    "en" => "Managing boiling process parameters, such as time, temperature, and chemical composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28126,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowanej masy włóknistej, zapewniając odpowiednią gęstość, jasność i strukturalność.",
                    "en" => "Controlling the quality of boiled fiber pulp, ensuring proper density, brightness, and structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28127,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń warzelni.",
                    "en" => "Repairing and maintaining brewing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28128,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu warzenia w celu zwiększenia wydajności i jakości produkcji papieru.",
                    "en" => "Optimizing the boiling process to increase efficiency and improve paper production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28129,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu warzenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the boiling process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_WYROBU_MASY_PAPIERNICZEJ_I_PRODUKCJI_PAPIERU = [
            [
                "id" => 28130,
                "name" => json_encode([
                    "pl" => "Obsługa innych urządzeń do produkcji masy papierniczej i papieru, takich jak maszyny do formowania, suszenia i cięcia papieru.",
                    "en" => "Operating other equipment for pulp production and paper manufacturing, such as machines for forming, drying, and cutting paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28131,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji masy papierniczej i papieru, takim jak wilgotność, prędkość i czas produkcji.",
                    "en" => "Managing pulp and paper production parameters, such as moisture, speed, and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28132,
                "name" => json_encode([
                    "pl" => "Kontrola jakości masy papierniczej i papieru, zapewniając odpowiednią gładkość, gramaturę i wytrzymałość.",
                    "en" => "Controlling the quality of pulp and paper, ensuring proper smoothness, weight, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28133,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji masy papierniczej i papieru.",
                    "en" => "Repairing and maintaining pulp and paper production equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28134,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji masy papierniczej i papieru w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing pulp and paper production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28135,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji masy papierniczej i papieru oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting pulp and paper production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_LAKIEROWANIA_I_LAMINOWANIA_PRZETWORÓW_PAPIEROWYCH = [
            [
                "id" => 28136,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do lakierowania i laminowania przetworów papierowych, takich jak maszyny do nanoszenia powłok ochronnych i laminowania papieru.",
                    "en" => "Operating machines for coating and laminating paper products, such as machines for applying protective coatings and laminating paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28137,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lakierowania i laminowania, takim jak czas, temperatura, ciśnienie.",
                    "en" => "Managing the coating and laminating process parameters, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28138,
                "name" => json_encode([
                    "pl" => "Kontrola jakości lakierowanych i laminowanych przetworów papierowych, zapewniając odpowiednią grubość powłoki, trwałość i estetykę.",
                    "en" => "Controlling the quality of coated and laminated paper products, ensuring proper coating thickness, durability, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28139,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do lakierowania i laminowania przetworów papierowych.",
                    "en" => "Repairing and maintaining machines for coating and laminating paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28140,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu lakierowania i laminowania, w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the coating and laminating process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28141,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lakierowania i laminowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the coating and laminating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_OPAKOWAŃ_Z_PAPIERU_I_TEKTURY = [
            [
                "id" => 28142,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji opakowań z papieru i tektury, takich jak maszyny do cięcia, składania, klejenia i formowania opakowań.",
                    "en" => "Operating machines for producing paper and cardboard packaging, such as machines for cutting, folding, gluing, and forming packages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28143,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji opakowań, takim jak ciśnienie, temperatura, czas, prędkość.",
                    "en" => "Managing packaging production process parameters, such as pressure, temperature, time, and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28144,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych opakowań z papieru i tektury, zapewniając odpowiednią wytrzymałość, estetykę i funkcjonalność.",
                    "en" => "Controlling the quality of produced paper and cardboard packaging, ensuring proper strength, aesthetics, and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28145,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji opakowań.",
                    "en" => "Repairing and maintaining machines for packaging production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28146,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji opakowań z papieru i tektury, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the packaging production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28147,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji opakowań oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the packaging production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_PIŚMIENNYCH = [
            [
                "id" => 28148,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji papierowych artykułów piśmiennych, takich jak maszyny do cięcia, składania i pakowania papieru.",
                    "en" => "Operating machines for producing paper stationery products, such as machines for cutting, folding, and packaging paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28149,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji artykułów piśmiennych, takim jak wilgotność, grubość, prędkość cięcia.",
                    "en" => "Managing production parameters for stationery products, such as moisture, thickness, and cutting speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28150,
                "name" => json_encode([
                    "pl" => "Kontrola jakości papierowych artykułów piśmiennych, zapewniając odpowiednią gramaturę, gładkość i estetykę.",
                    "en" => "Controlling the quality of paper stationery products, ensuring proper weight, smoothness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28151,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji papierowych artykułów piśmiennych.",
                    "en" => "Repairing and maintaining machines for producing paper stationery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28152,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji papierowych artykułów piśmiennych, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the production process of paper stationery products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28153,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji papierowych artykułów piśmiennych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results for paper stationery products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_TOALETOWYCH_I_SANITARNYCH = [
            [
                "id" => 28154,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji papierowych artykułów toaletowych i sanitarnych, takich jak maszyny do produkcji papieru toaletowego, ręczników papierowych, chusteczek.",
                    "en" => "Operating machines for producing paper toilet and sanitary products, such as machines for producing toilet paper, paper towels, tissues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28155,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji papierowych artykułów sanitarnych, takim jak ciśnienie, temperatura i prędkość cięcia.",
                    "en" => "Managing production parameters for paper sanitary products, such as pressure, temperature, and cutting speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28156,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych artykułów toaletowych i sanitarnych, zapewniając odpowiednią gramaturę, gładkość i wytrzymałość.",
                    "en" => "Controlling the quality of produced toilet and sanitary products, ensuring proper weight, smoothness, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28157,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji papierowych artykułów toaletowych i sanitarnych.",
                    "en" => "Repairing and maintaining machines for producing paper toilet and sanitary products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28158,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji papierowych artykułów toaletowych i sanitarnych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the production process of paper toilet and sanitary products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28159,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji papierowych artykułów toaletowych i sanitarnych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results for paper toilet and sanitary products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIERU_I_TEKTURY_FALISTEJ = [
            [
                "id" => 28160,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji papieru i tektury falistej, w tym maszyny do formowania, suszenia i cięcia tektury falistej.",
                    "en" => "Operating machines for producing corrugated paper and cardboard, including machines for forming, drying, and cutting corrugated cardboard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28161,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji tektury falistej, takim jak ciśnienie, temperatura, czas produkcji.",
                    "en" => "Managing corrugated cardboard production parameters, such as pressure, temperature, and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28162,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanej tektury falistej, zapewniając odpowiednią wytrzymałość, grubość i estetykę.",
                    "en" => "Controlling the quality of produced corrugated cardboard, ensuring proper strength, thickness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28163,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji tektury falistej.",
                    "en" => "Repairing and maintaining machines for producing corrugated cardboard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28164,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji tektury falistej w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the corrugated cardboard production process to increase efficiency and improve quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28165,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji tektury falistej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the corrugated cardboard production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_SZNURKA_I_TULEI = [
            [
                "id" => 28166,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji sznurka i tulei, takich jak maszyny do formowania, cięcia i wiązania sznurka.",
                    "en" => "Operating machines for producing string and tubes, such as machines for forming, cutting, and tying string."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28167,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji sznurka i tulei, takim jak prędkość, ciśnienie i temperatura.",
                    "en" => "Managing production parameters for string and tube production, such as speed, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28168,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanego sznurka i tulei, zapewniając odpowiednią wytrzymałość, grubość i estetykę.",
                    "en" => "Controlling the quality of produced string and tubes, ensuring proper strength, thickness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28169,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji sznurka i tulei.",
                    "en" => "Repairing and maintaining machines for producing string and tubes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28170,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji sznurka i tulei w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the string and tube production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28171,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji sznurka i tulei oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the string and tube production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_KROJĄCEJ_I_WYKRAWIAJĄCEJ_DO_PAPIERU = [
            [
                "id" => 28172,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn krojących i wykrawających do papieru, takich jak maszyny do cięcia, wykrawania i formowania papieru.",
                    "en" => "Operating cutting and die-cutting machines for paper, such as machines for cutting, punching, and forming paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28173,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu cięcia i wykrawania, takim jak prędkość, ciśnienie, czas wykrawania.",
                    "en" => "Managing cutting and punching process parameters, such as speed, pressure, and punching time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28174,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ciętych i wykrojonych wyrobów papierowych, zapewniając odpowiednią precyzję, grubość i estetykę.",
                    "en" => "Controlling the quality of cut and punched paper products, ensuring proper precision, thickness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28175,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn krojących i wykrawających do papieru.",
                    "en" => "Repairing and maintaining cutting and die-cutting machines for paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28176,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia i wykrawania, w celu zwiększenia jakości i wydajności produkcji papieru.",
                    "en" => "Optimizing cutting and punching processes to improve quality and paper production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28177,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu cięcia i wykrawania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cutting and punching process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRAS_DO_FORMOWANIA_WYROBÓW_Z_MASY_PAPIERNICZEJ = [
            [
                "id" => 28178,
                "name" => json_encode([
                    "pl" => "Obsługa pras do formowania wyrobów z masy papierniczej, takich jak maszyny do formowania i prasowania wyrobów papierowych.",
                    "en" => "Operating presses for molding paper products, such as machines for forming and pressing paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28179,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu formowania i prasowania, takim jak temperatura, ciśnienie, czas.",
                    "en" => "Managing molding and pressing process parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28180,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych wyrobów papierowych, zapewniając odpowiednią grubość, twardość i estetykę.",
                    "en" => "Controlling the quality of molded paper products, ensuring proper thickness, hardness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28181,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pras do formowania wyrobów z masy papierniczej.",
                    "en" => "Repairing and maintaining presses for molding paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28182,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania i prasowania wyrobów z masy papierniczej, w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the molding and pressing process for paper products to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28183,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania i prasowania wyrobów z masy papierniczej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the molding and pressing process results for paper products and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH = [
            [
                "id" => 28184,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn do produkcji wyrobów papierniczych, takich jak maszyny do formowania, cięcia i pakowania papieru.",
                    "en" => "Operating other machines for producing paper products, such as machines for forming, cutting, and packaging paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28185,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji wyrobów papierniczych, takim jak wilgotność, ciśnienie, prędkość i czas produkcji.",
                    "en" => "Managing production parameters for paper products, such as humidity, pressure, speed, and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28186,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych wyrobów papierniczych, zapewniając odpowiednią gładkość, gramaturę i wytrzymałość.",
                    "en" => "Controlling the quality of produced paper products, ensuring proper smoothness, weight, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28187,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji wyrobów papierniczych.",
                    "en" => "Repairing and maintaining machines for producing paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28188,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów papierniczych w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the paper product production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28189,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji wyrobów papierniczych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the paper product production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DZIEWIARZ = [
            [
                "id" => 28190,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn dziewiarskich, takich jak maszyny do dziania wyrobów z włókien.",
                    "en" => "Operating knitting machines, such as machines for knitting products from fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28191,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu dziania, takim jak prędkość, napięcie nici, typ ściegów.",
                    "en" => "Managing knitting process parameters, such as speed, thread tension, and stitch type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28192,
                "name" => json_encode([
                    "pl" => "Kontrola jakości dzianin, zapewniając odpowiednią gęstość, wytrzymałość i estetykę materiału.",
                    "en" => "Controlling the quality of knitted fabrics, ensuring proper density, strength, and aesthetics of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28193,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn dziewiarskich.",
                    "en" => "Repairing and maintaining knitting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28194,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu dziania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the knitting process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28195,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu dziania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the knitting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZĘDZARZ = [
            [
                "id" => 28196,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn przędzalniczych, takich jak maszyny do przędzenia włókien w przędzę.",
                    "en" => "Operating spinning machines, such as machines for spinning fibers into yarn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28197,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przędzenia, takim jak prędkość, napięcie przędzy, jakość włókien.",
                    "en" => "Managing spinning process parameters, such as speed, yarn tension, and fiber quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28198,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przędzy, zapewniając odpowiednią grubość, wytrzymałość i spójność materiału.",
                    "en" => "Controlling the quality of yarn, ensuring proper thickness, strength, and consistency of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28199,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn przędzalniczych.",
                    "en" => "Repairing and maintaining spinning machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28200,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przędzenia w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the spinning process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28201,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przędzenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the spinning process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TKACZ = [
            [
                "id" => 28202,
                "name" => json_encode([
                    "pl" => "Obsługa krosna tkackiego, w tym maszyny do tkania materiałów tekstylnych.",
                    "en" => "Operating weaving looms, including machines for weaving textile materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28203,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu tkania, takim jak prędkość, napięcie nici, rodzaj splotu.",
                    "en" => "Managing weaving process parameters, such as speed, thread tension, and weave type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28204,
                "name" => json_encode([
                    "pl" => "Kontrola jakości tkaniny, zapewniając odpowiednią wytrzymałość, gęstość i estetykę materiału.",
                    "en" => "Controlling the quality of fabric, ensuring proper strength, density, and aesthetics of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28205,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja krosna tkackiego oraz innych urządzeń tkalni.",
                    "en" => "Repairing and maintaining the weaving loom and other weaving equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28206,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tkania w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the weaving process to improve efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28207,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tkania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the weaving process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRZYGOTOWANIA_WŁÓKIEN = [
            [
                "id" => 28208,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przygotowania włókien, takich jak maszyny do czesania, karbowania i układania włókien.",
                    "en" => "Operating machines for fiber preparation, such as machines for carding, combing, and arranging fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28209,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przygotowania włókien, takim jak tempo, napięcie nici, i jakość włókien.",
                    "en" => "Managing fiber preparation process parameters, such as speed, thread tension, and fiber quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28210,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przygotowanych włókien, zapewniając odpowiednią grubość, czystość i jednorodność materiału.",
                    "en" => "Controlling the quality of prepared fibers, ensuring proper thickness, cleanliness, and uniformity of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28211,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do przygotowania włókien.",
                    "en" => "Repairing and maintaining machines for fiber preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28212,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowania włókien w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the fiber preparation process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28213,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przygotowania włókien oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the fiber preparation process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_PRZĘDZALNICZYCH = [
            [
                "id" => 28214,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn przędzalniczych, takich jak maszyny do przędzenia włókien na przędzę.",
                    "en" => "Operating spinning machines, such as machines for spinning fibers into yarn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28215,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przędzenia, takim jak prędkość, napięcie przędzy, jakość włókien.",
                    "en" => "Managing spinning process parameters, such as speed, yarn tension, and fiber quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28216,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przędzy, zapewniając odpowiednią grubość, wytrzymałość i spójność materiału.",
                    "en" => "Controlling the quality of yarn, ensuring proper thickness, strength, and consistency of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28217,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn przędzalniczych.",
                    "en" => "Repairing and maintaining spinning machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28218,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przędzenia w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the spinning process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28219,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przędzenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the spinning process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRZEWIJAREK_I_SKRĘCAREK_NITEK = [
            [
                "id" => 28220,
                "name" => json_encode([
                    "pl" => "Obsługa przewijarek i skręcarek nitek, maszyn do przewijania i skręcania nitek w celu uzyskania wymaganej grubości i struktury.",
                    "en" => "Operating winders and twisters for yarn, machines for winding and twisting yarn to achieve required thickness and structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28221,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przewijania i skręcania nitek, takim jak prędkość, napięcie nici, liczba skrętów.",
                    "en" => "Managing yarn winding and twisting process parameters, such as speed, thread tension, and number of twists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28222,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przewijanych i skręcanych nitek, zapewniając odpowiednią grubość, elastyczność i wytrzymałość materiału.",
                    "en" => "Controlling the quality of wound and twisted yarn, ensuring proper thickness, flexibility, and strength of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28223,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja przewijarek i skręcarek nitek.",
                    "en" => "Repairing and maintaining yarn winders and twisters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28224,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przewijania i skręcania nitek, w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the yarn winding and twisting process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28225,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przewijania i skręcania nitek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the yarn winding and twisting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_PRZĘDZALNICZYCH_I_POKREWNI = [
            [
                "id" => 28226,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn przędzalniczych i pokrewnych, takich jak maszyny do rozciągania, łączenia i wykańczania nitek.",
                    "en" => "Operating other spinning machines and related equipment, such as machines for stretching, joining, and finishing yarns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28227,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przędzenia i obróbki nitek, takim jak napięcie, prędkość obrotowa, i temperatura.",
                    "en" => "Managing spinning and yarn processing parameters, such as tension, rotation speed, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28228,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przędz i nitek, zapewniając odpowiednią spójność, grubość i wytrzymałość.",
                    "en" => "Controlling the quality of yarns and threads, ensuring proper consistency, thickness, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28229,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn przędzalniczych oraz urządzeń pokrewnych.",
                    "en" => "Repairing and maintaining spinning machines and related equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28230,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji nitek w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing yarn production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28231,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji nitek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the yarn production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DZIEWIARSKICH = [
            [
                "id" => 28232,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn dziewiarskich, takich jak maszyny do dziania wyrobów z włókien, w tym maszyny do produkcji dzianin okrągłych i płaskich.",
                    "en" => "Operating knitting machines, such as machines for knitting products from fibers, including machines for producing circular and flat knitted fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28233,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu dziania, takim jak prędkość, napięcie nici, rodzaj splotu.",
                    "en" => "Managing knitting process parameters, such as speed, thread tension, and type of stitch."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28234,
                "name" => json_encode([
                    "pl" => "Kontrola jakości dzianin, zapewniając odpowiednią gęstość, wytrzymałość i estetykę materiału.",
                    "en" => "Controlling the quality of knitted fabrics, ensuring proper density, strength, and aesthetics of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28235,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn dziewiarskich.",
                    "en" => "Repairing and maintaining knitting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28236,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu dziania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the knitting process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28237,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu dziania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the knitting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_PRZYGOTOWAWCZYCH_DO_WYTWARZANIA_PŁASKICH_WYROBÓW_WŁÓKIENNICZYCH = [
            [
                "id" => 28238,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn przygotowawczych do produkcji płaskich wyrobów włókienniczych, takich jak maszyny do wstępnej obróbki włókien, cięcia i układania.",
                    "en" => "Operating preparatory machines for producing flat textile products, such as machines for fiber preliminary processing, cutting, and laying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28239,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przygotowawczego, takim jak napięcie nici, prędkość cięcia i ilość materiału.",
                    "en" => "Managing preparatory process parameters, such as thread tension, cutting speed, and material amount."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28240,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów przygotowawczych, zapewniając odpowiednią gładkość, grubość i równomierność materiału.",
                    "en" => "Controlling the quality of preparatory materials, ensuring proper smoothness, thickness, and uniformity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28241,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn przygotowawczych do wytwarzania płaskich wyrobów włókienniczych.",
                    "en" => "Repairing and maintaining preparatory machines for producing flat textile products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28242,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowawczego w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the preparatory process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28243,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przygotowawczego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the preparatory process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_TKACKICH = [
            [
                "id" => 28244,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn tkackich, takich jak krosna do produkcji tkanin, w tym maszyny do tkania materiałów tekstylnych.",
                    "en" => "Operating weaving machines, such as looms for producing fabrics, including machines for weaving textile materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28245,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu tkania, takim jak prędkość, napięcie nici, rodzaj splotu.",
                    "en" => "Managing the weaving process parameters, such as speed, thread tension, and weave type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28246,
                "name" => json_encode([
                    "pl" => "Kontrola jakości tkaniny, zapewniając odpowiednią wytrzymałość, gęstość i estetykę materiału.",
                    "en" => "Controlling the quality of fabric, ensuring proper strength, density, and aesthetics of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28247,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn tkackich.",
                    "en" => "Repairing and maintaining weaving machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28248,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tkania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the weaving process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28249,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tkania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the weaving process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_W_PRZEMYŚLE_WŁÓKIENNICZYM_S = [
            [
                "id" => 28250,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn w przemyśle włókienniczym, takich jak maszyny do produkcji tkanin, dzianin, włókien czy przędzy.",
                    "en" => "Operating machines in the textile industry, such as machines for producing fabrics, knitted fabrics, fibers, and yarn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28251,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji, takim jak prędkość, napięcie nici, rodzaj materiału, i typ tkaniny.",
                    "en" => "Managing production process parameters, such as speed, thread tension, material type, and fabric type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28252,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji, zapewniając odpowiednią spójność, wytrzymałość, gęstość i estetykę materiału.",
                    "en" => "Controlling production quality, ensuring proper consistency, strength, density, and aesthetics of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28253,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn w przemyśle włókienniczym.",
                    "en" => "Repairing and maintaining machines in the textile industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28254,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28255,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_TKACKICH_I_DZIEWIARSKICH = [
            [
                "id" => 28256,
                "name" => json_encode([
                    "pl" => "Obsługa innych maszyn tkackich i dziewiarskich, takich jak maszyny do tkania wzorów i produkcji materiałów o specjalnych wymaganiach.",
                    "en" => "Operating other weaving and knitting machines, such as machines for weaving patterns and producing materials with special requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28257,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów tkania i dziania, dostosowując je do specyficznych wymagań produkcji.",
                    "en" => "Managing weaving and knitting process parameters, adjusting them to specific production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28258,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych tkanin i dzianin, zapewniając ich odpowiednią trwałość, gęstość i elastyczność.",
                    "en" => "Controlling the quality of produced fabrics and knitted fabrics, ensuring proper durability, density, and flexibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28259,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn tkackich i dziewiarskich.",
                    "en" => "Repairing and maintaining weaving and knitting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28260,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów tkania i dziania, aby zwiększyć efektywność produkcji.",
                    "en" => "Optimizing weaving and knitting processes to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28261,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tkania i dziania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting weaving and knitting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_WŁÓKNIN_I_PRZĘDZIN = [
            [
                "id" => 28262,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji włóknin i przędzin, w tym maszyny do wytwarzania materiałów non-woven i przędz syntetycznych.",
                    "en" => "Operating machines for producing nonwoven fabrics and yarns, including machines for making synthetic yarns and nonwoven materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28263,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji włóknin i przędzin, takim jak prędkość, napięcie nici, i ciśnienie.",
                    "en" => "Managing nonwoven fabric and yarn production process parameters, such as speed, thread tension, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28264,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji włóknin i przędzin, zapewniając odpowiednią grubość, wytrzymałość i spójność materiału.",
                    "en" => "Controlling the quality of nonwoven fabric and yarn production, ensuring proper thickness, strength, and consistency of the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28265,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji włóknin i przędzin.",
                    "en" => "Repairing and maintaining machines for producing nonwoven fabrics and yarns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28266,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji włóknin i przędzin w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing nonwoven fabric and yarn production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28267,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji włóknin i przędzin oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting nonwoven fabric and yarn production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LAKIERNIK_PROSZKOWY = [
            [
                "id" => 28268,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do nakładania lakieru proszkowego na różne powierzchnie, takich jak elementy metalowe, plastikowe czy drewniane.",
                    "en" => "Operating equipment for applying powder coating to various surfaces, such as metal, plastic, or wooden elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28269,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni przed nałożeniem lakieru proszkowego, takie jak czyszczenie, odtłuszczanie i piaskowanie.",
                    "en" => "Preparing surfaces before powder coating, such as cleaning, degreasing, and sandblasting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28270,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lakierowania proszkowego, takim jak czas, temperatura i grubość warstwy lakieru.",
                    "en" => "Managing powder coating process parameters, such as time, temperature, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28271,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru proszkowego, zapewniając odpowiednią twardość, gładkość i estetykę.",
                    "en" => "Controlling the quality of applied powder coating, ensuring proper hardness, smoothness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28272,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do lakierowania proszkowego.",
                    "en" => "Repairing and maintaining powder coating equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28273,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lakierowania proszkowego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting powder coating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LAKIERNIK_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28274,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do lakierowania powierzchni tworzyw sztucznych, takich jak maszyny do nakładania powłok ochronnych i dekoracyjnych.",
                    "en" => "Operating equipment for coating plastic surfaces, such as machines for applying protective and decorative coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28275,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni tworzyw sztucznych przed nałożeniem lakieru, w tym czyszczenie i odtłuszczanie.",
                    "en" => "Preparing plastic surfaces before coating, including cleaning and degreasing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28276,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lakierowania tworzyw sztucznych, takim jak temperatura, czas schnięcia i grubość powłoki.",
                    "en" => "Managing plastic coating process parameters, such as temperature, drying time, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28277,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru na tworzywa sztuczne, zapewniając odpowiednią trwałość, estetykę i elastyczność.",
                    "en" => "Controlling the quality of applied plastic coating, ensuring proper durability, aesthetics, and flexibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28278,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do lakierowania tworzyw sztucznych.",
                    "en" => "Repairing and maintaining equipment for plastic coating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28279,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lakierowania tworzyw sztucznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting plastic coating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LAKIERNIK_WYROBÓW_DRZEWNYCH = [
            [
                "id" => 28280,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do lakierowania wyrobów drzewnych, takich jak meble, panele i elementy drewniane.",
                    "en" => "Operating machines for coating wooden products, such as furniture, panels, and wooden elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28281,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni drewna przed nałożeniem lakieru, w tym szlifowanie, czyszczenie i impregnacja.",
                    "en" => "Preparing wood surfaces before coating, including sanding, cleaning, and impregnating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28282,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lakierowania wyrobów drzewnych, takim jak temperatura, czas suszenia, i grubość warstwy lakieru.",
                    "en" => "Managing wood coating process parameters, such as temperature, drying time, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28283,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru na wyrobach drzewnych, zapewniając odpowiednią trwałość, estetykę i odporność.",
                    "en" => "Controlling the quality of applied coating on wooden products, ensuring proper durability, aesthetics, and resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28284,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do lakierowania wyrobów drzewnych.",
                    "en" => "Repairing and maintaining equipment for coating wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28285,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lakierowania wyrobów drzewnych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the wood coating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MALARZ_LAKIERNIK_SAMOLOTOWY = [
            [
                "id" => 28286,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do malowania i lakierowania elementów samolotów, w tym przygotowanie powierzchni i nakładanie powłok ochronnych.",
                    "en" => "Operating equipment for painting and coating airplane parts, including surface preparation and applying protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28287,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu malowania samolotów, takim jak temperatura, wilgotność i ciśnienie powietrza.",
                    "en" => "Managing airplane painting process parameters, such as temperature, humidity, and air pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28288,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru, zapewniając równomierność, grubość i wytrzymałość powłok.",
                    "en" => "Controlling the quality of applied paint, ensuring uniformity, thickness, and durability of coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28289,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń malarskich i lakierniczych wykorzystywanych do malowania samolotów.",
                    "en" => "Repairing and maintaining painting and coating equipment used for airplane painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28290,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu malowania samolotów w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the airplane painting process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28291,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu malowania samolotów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the airplane painting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MALARZ_LAKIERNIK_KONSTRUKCJI_I_WYROBÓW_METALOWYCH = [
            [
                "id" => 28292,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do malowania i lakierowania konstrukcji i wyrobów metalowych, takich jak maszyny do natryskiwania farb i lakierów.",
                    "en" => "Operating equipment for painting and coating metal structures and products, such as machines for spraying paints and coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28293,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu malowania konstrukcji metalowych, takim jak temperatura, ciśnienie i czas suszenia.",
                    "en" => "Managing metal structure painting process parameters, such as temperature, pressure, and drying time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28294,
                "name" => json_encode([
                    "pl" => "Kontrola jakości malowanych konstrukcji metalowych, zapewniając odpowiednią grubość i trwałość powłok.",
                    "en" => "Controlling the quality of painted metal structures, ensuring proper thickness and durability of coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28295,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do malowania i lakierowania konstrukcji metalowych.",
                    "en" => "Repairing and maintaining equipment for painting and coating metal structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28296,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu malowania konstrukcji metalowych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the metal structure painting process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28297,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu malowania konstrukcji metalowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the metal structure painting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIASKARZ = [
            [
                "id" => 28298,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do piaskowania, takich jak maszyny do czyszczenia i usuwania rdzy z metalowych powierzchni.",
                    "en" => "Operating sandblasting machines, such as machines for cleaning and removing rust from metal surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28299,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu piaskowania, takim jak ciśnienie, czas, oraz rodzaj używanego ścierniwa.",
                    "en" => "Managing sandblasting process parameters, such as pressure, time, and type of abrasive used."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28300,
                "name" => json_encode([
                    "pl" => "Kontrola jakości piaskowanych powierzchni, zapewniając odpowiednią gładkość i czystość.",
                    "en" => "Controlling the quality of sandblasted surfaces, ensuring proper smoothness and cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28301,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn piaskarskich.",
                    "en" => "Repairing and maintaining sandblasting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28302,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu piaskowania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the sandblasting process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28303,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu piaskowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the sandblasting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_LAKIERNICY = [
            [
                "id" => 28304,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn lakierniczych do nakładania powłok ochronnych i dekoracyjnych na różnorodne powierzchnie.",
                    "en" => "Operating painting machines for applying protective and decorative coatings on various surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28305,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni przed nałożeniem lakieru, takie jak szlifowanie, czyszczenie, i odtłuszczanie.",
                    "en" => "Preparing surfaces before painting, such as sanding, cleaning, and degreasing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28306,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lakierowania, takim jak temperatura, czas suszenia, i grubość powłoki.",
                    "en" => "Managing coating process parameters, such as temperature, drying time, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28307,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru, zapewniając odpowiednią twardość, gładkość i estetykę.",
                    "en" => "Controlling the quality of applied paint, ensuring proper hardness, smoothness, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28308,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn lakierniczych.",
                    "en" => "Repairing and maintaining painting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28309,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lakierowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the coating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNIK_LAKIERNIKA = [
            [
                "id" => 28310,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu powierzchni przed nałożeniem lakieru, w tym czyszczenie, szlifowanie i odtłuszczanie.",
                    "en" => "Assisting in surface preparation before applying paint, including cleaning, sanding, and degreasing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28311,
                "name" => json_encode([
                    "pl" => "Wsparcie lakiernika przy aplikacji powłok ochronnych i dekoracyjnych na powierzchnie.",
                    "en" => "Assisting the painter in applying protective and decorative coatings to surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28312,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego lakieru, raportowanie o jakości powłoki.",
                    "en" => "Controlling the quality of applied paint, reporting on coating quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28313,
                "name" => json_encode([
                    "pl" => "Pomoc w konserwacji i naprawach maszyn lakierniczych.",
                    "en" => "Assisting in the maintenance and repair of painting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28314,
                "name" => json_encode([
                    "pl" => "Przygotowanie lakierów i farb do użycia, dobór odpowiednich materiałów.",
                    "en" => "Preparing paints and coatings for use, selecting appropriate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28315,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek w miejscu pracy oraz przestrzeganie zasad BHP.",
                    "en" => "Maintaining cleanliness in the workplace and following health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LUTOWACZ = [
            [
                "id" => 28316,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do lutowania, takich jak lutownice elektryczne, gazowe, czy indukcyjne.",
                    "en" => "Operating soldering equipment, such as electric, gas, or induction soldering irons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28317,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu lutowania, takim jak temperatura, czas i użycie odpowiednich materiałów lutowniczych.",
                    "en" => "Managing soldering process parameters, such as temperature, time, and use of appropriate soldering materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28318,
                "name" => json_encode([
                    "pl" => "Kontrola jakości lutowanych połączeń, zapewniając ich odpowiednią wytrzymałość i trwałość.",
                    "en" => "Controlling the quality of soldered joints, ensuring proper strength and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28319,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń lutowniczych.",
                    "en" => "Repairing and maintaining soldering equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28320,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu lutowania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the soldering process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28321,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu lutowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting soldering process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ROBOTÓW_SPAWALNICZYCH = [
            [
                "id" => 28322,
                "name" => json_encode([
                    "pl" => "Obsługa robotów spawalniczych do wykonywania spawów na elementach metalowych.",
                    "en" => "Operating robotic welders for performing welds on metal parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28323,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu spawania, takim jak prędkość, napięcie, temperatura i czas.",
                    "en" => "Managing welding process parameters, such as speed, voltage, temperature, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28324,
                "name" => json_encode([
                    "pl" => "Kontrola jakości spawów, zapewniając odpowiednią wytrzymałość i estetykę.",
                    "en" => "Controlling the quality of welds, ensuring proper strength and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28325,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja robotów spawalniczych.",
                    "en" => "Repairing and maintaining robotic welding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28326,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu spawania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the welding process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28327,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu spawania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the welding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ZGRZEWAREK = [
            [
                "id" => 28328,
                "name" => json_encode([
                    "pl" => "Obsługa zgrzewarek do łączenia elementów metalowych lub plastikowych.",
                    "en" => "Operating welding machines for joining metal or plastic parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28329,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu zgrzewania, takim jak czas, temperatura, i nacisk.",
                    "en" => "Managing welding process parameters, such as time, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28330,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zgrzewów, zapewniając odpowiednią wytrzymałość i trwałość połączeń.",
                    "en" => "Controlling the quality of welds, ensuring proper strength and durability of joints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28331,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja zgrzewarek.",
                    "en" => "Repairing and maintaining welding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28332,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zgrzewania w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the welding process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28333,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zgrzewania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the welding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPAWACZ = [
            [
                "id" => 28334,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń spawalniczych, takich jak spawarki elektryczne, gazowe i TIG, do łączenia elementów metalowych.",
                    "en" => "Operating welding equipment, such as electric, gas, and TIG welders, for joining metal parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28335,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu spawania, takim jak prędkość, napięcie, temperatura i czas.",
                    "en" => "Managing welding process parameters, such as speed, voltage, temperature, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28336,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych spawów, zapewniając ich wytrzymałość, estetykę i zgodność z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of completed welds, ensuring their strength, aesthetics, and compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28337,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń spawalniczych.",
                    "en" => "Repairing and maintaining welding equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28338,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu spawania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the welding process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28339,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu spawania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the welding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZGRZEWACZ = [
            [
                "id" => 28340,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do zgrzewania elementów metalowych lub tworzyw sztucznych, takich jak zgrzewarki do tworzyw czy maszyny do zgrzewania stali.",
                    "en" => "Operating machines for welding metal parts or plastics, such as plastic welding machines and machines for welding steel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28341,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu zgrzewania, takim jak czas, temperatura, ciśnienie i moc.",
                    "en" => "Managing welding process parameters, such as time, temperature, pressure, and power."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28342,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zgrzewów, zapewniając odpowiednią wytrzymałość, estetykę oraz odporność na czynniki zewnętrzne.",
                    "en" => "Controlling the quality of welds, ensuring proper strength, aesthetics, and resistance to external factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28343,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń zgrzewających.",
                    "en" => "Repairing and maintaining welding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28344,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zgrzewania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the welding process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28345,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zgrzewania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the welding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPAWACZE_I_POKREWNI = [
            [
                "id" => 28346,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac spawalniczych na różnych materiałach i elementach, takich jak prace montażowe i naprawcze.",
                    "en" => "Performing welding tasks on various materials and parts, such as assembly and repair work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28347,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu spawania, takim jak rodzaj materiału, kąt spawania, i liczba spawów.",
                    "en" => "Managing welding process parameters, such as material type, welding angle, and number of welds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28348,
                "name" => json_encode([
                    "pl" => "Kontrola jakości spawów, w tym wykrywanie i naprawa defektów.",
                    "en" => "Controlling weld quality, including detecting and fixing defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28349,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu spawalniczego, takich jak spawarki i urządzenia pomocnicze.",
                    "en" => "Repairing and maintaining welding equipment, such as welders and auxiliary machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28350,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu spawania w celu poprawy efektywności pracy i jakości spawów.",
                    "en" => "Optimizing the welding process to improve work efficiency and weld quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28351,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu spawania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting welding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_SPAWALNICTWA = [
            [
                "id" => 28352,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procesów spawalniczych, w tym wybór odpowiednich technik i materiałów spawalniczych.",
                    "en" => "Developing and implementing welding processes, including selecting appropriate techniques and welding materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28353,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością spawów i procesem spawalniczym, w tym weryfikacja i testowanie spawów.",
                    "en" => "Supervising weld quality and welding processes, including verifying and testing welds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28354,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej związanej ze spawalnictwem, w tym instrukcji i specyfikacji.",
                    "en" => "Developing technical documentation related to welding, including instructions and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28355,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie procedur spawalniczych i norm jakościowych.",
                    "en" => "Training personnel in welding procedures and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28356,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja procesów spawania w celu poprawy efektywności i bezpieczeństwa.",
                    "en" => "Analyzing and optimizing welding processes to improve efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28357,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych technologii spawalniczych i zapewnianie zgodności z normami przemysłowymi.",
                    "en" => "Implementing modern welding technologies and ensuring compliance with industrial standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EGUTERYSTA = [
            [
                "id" => 28358,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji elementów z eguterytu, w tym gięcia i formowania materiałów.",
                    "en" => "Operating equipment for the production of items made of egutert, including bending and forming materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28359,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji elementów z eguterytu, takim jak temperatura, czas i ciśnienie.",
                    "en" => "Managing the production process parameters for egutert items, such as temperature, time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28360,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji elementów z eguterytu, zapewniając odpowiednią trwałość i estetykę.",
                    "en" => "Controlling the quality of egutert items, ensuring proper durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28361,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do produkcji eguterytu.",
                    "en" => "Repairing and maintaining equipment for the production of egutert."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28362,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji elementów z eguterytu w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the production process of egutert items to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28363,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji i raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PLATNERZ = [
            [
                "id" => 28364,
                "name" => json_encode([
                    "pl" => "Obróbka metali za pomocą młota, młotów pneumatycznych i innych narzędzi w celu formowania wyrobów metalowych.",
                    "en" => "Metalworking using hammers, pneumatic hammers, and other tools to form metal items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28365,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu płatnerstwa, takim jak czas, temperatura i techniki formowania metalu.",
                    "en" => "Managing the blacksmithing process parameters, such as time, temperature, and metal forming techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28366,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanego wyrobu, zapewniając odpowiednią wytrzymałość, kształt i estetykę.",
                    "en" => "Controlling the quality of finished products, ensuring proper strength, shape, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28367,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi płatnerskich.",
                    "en" => "Repairing and maintaining blacksmithing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28368,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu płatnerstwa w celu poprawy jakości i efektywności produkcji.",
                    "en" => "Optimizing the blacksmithing process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28369,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji płatnerskiej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the blacksmithing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RUSZNIKARZ = [
            [
                "id" => 28370,
                "name" => json_encode([
                    "pl" => "Produkcja, naprawa i konserwacja broni palnej, w tym montaż i testowanie broni.",
                    "en" => "Manufacturing, repairing, and maintaining firearms, including assembly and testing of weapons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28371,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji broni, takim jak precyzyjne dopasowanie części i kontrola jakości.",
                    "en" => "Managing firearm production process parameters, such as precise fitting of parts and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28372,
                "name" => json_encode([
                    "pl" => "Testowanie broni pod kątem sprawności i bezpieczeństwa.",
                    "en" => "Testing firearms for functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28373,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi rusznikarskich.",
                    "en" => "Repairing and maintaining gunsmithing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28374,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji i naprawy broni w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the production and repair process of firearms to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28375,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników naprawy broni oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting firearm repair results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŚLUSARZ = [
            [
                "id" => 28376,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ślusarskich, takich jak cięcie, gięcie, spawanie i montaż elementów metalowych.",
                    "en" => "Performing locksmithing tasks, such as cutting, bending, welding, and assembling metal parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28377,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki metali, takim jak temperatura, ciśnienie i czas.",
                    "en" => "Managing metalworking process parameters, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28378,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów, zapewniając odpowiednią wytrzymałość i zgodność z rysunkami technicznymi.",
                    "en" => "Controlling the quality of completed parts, ensuring proper strength and compliance with technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28379,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi i urządzeń ślusarskich.",
                    "en" => "Repairing and maintaining locksmithing tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28380,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ślusarskiego w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the locksmithing process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28381,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy ślusarskiej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting locksmithing work results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŚLUSARZ_GALANTERII_METALOWEJ = [
            [
                "id" => 28382,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ślusarskich związanych z produkcją elementów galanterii metalowej, takich jak biżuteria, guziki czy klamry.",
                    "en" => "Performing locksmithing tasks related to the production of metalware items, such as jewelry, buttons, or buckles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28383,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji galanterii metalowej, takim jak dobór materiałów i techniki obróbki.",
                    "en" => "Managing metalware production process parameters, such as material selection and processing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28384,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów galanterii metalowej, zapewniając odpowiednią precyzję i estetykę.",
                    "en" => "Controlling the quality of completed metalware items, ensuring proper precision and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28385,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi i urządzeń ślusarskich wykorzystywanych w produkcji galanterii metalowej.",
                    "en" => "Repairing and maintaining locksmithing tools and equipment used in metalware production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28386,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji galanterii metalowej w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the metalware production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28387,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji galanterii metalowej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting metalware production results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŚLUSARZ_NARZĘDZIOWY = [
            [
                "id" => 28388,
                "name" => json_encode([
                    "pl" => "Wykonywanie, naprawa i konserwacja narzędzi ślusarskich, takich jak klucze, piły, młotki i wiertła.",
                    "en" => "Manufacturing, repairing, and maintaining locksmithing tools, such as wrenches, saws, hammers, and drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28389,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu produkcji narzędzi, takim jak dobór materiałów i techniki obróbki.",
                    "en" => "Managing tool production process parameters, such as material selection and processing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28390,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych narzędzi, zapewniając ich trwałość, precyzję i funkcjonalność.",
                    "en" => "Controlling the quality of completed tools, ensuring durability, precision, and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28391,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi ślusarskich.",
                    "en" => "Repairing and maintaining locksmithing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28392,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji narzędzi w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing tool production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28393,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji narzędzi oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting tool production results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRASER = [
            [
                "id" => 28394,
                "name" => json_encode([
                    "pl" => "Wykonywanie rysunków technicznych i przenoszenie wymiarów na powierzchnie robocze, takie jak metalowe lub drewniane elementy.",
                    "en" => "Creating technical drawings and transferring dimensions to work surfaces, such as metal or wooden parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28395,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni roboczych, takich jak cięcie, wiercenie i grawerowanie w celu naniesienia dokładnych wymiarów.",
                    "en" => "Preparing work surfaces, such as cutting, drilling, and engraving for precise dimension marking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28396,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu trasowania, takim jak precyzja wymiarów, ustawienie narzędzi i kontrola jakości.",
                    "en" => "Managing tracing process parameters, such as dimension precision, tool setting, and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28397,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych tras i wymiarów, zapewniając ich zgodność z projektem i normami technicznymi.",
                    "en" => "Controlling the quality of made tracings and dimensions, ensuring they comply with the design and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28398,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi traserskich, takich jak suwmiarki, mikrometry i inne przyrządy pomiarowe.",
                    "en" => "Repairing and maintaining tracing tools, such as calipers, micrometers, and other measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28399,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu trasowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the tracing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ŚLUSARZE_I_POKREWNI = [
            [
                "id" => 28400,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ślusarskich, takich jak cięcie, gięcie, spawanie i montaż elementów metalowych, w tym części maszyn i urządzeń.",
                    "en" => "Performing locksmithing tasks, such as cutting, bending, welding, and assembling metal parts, including machine and equipment components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28401,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki metali, takim jak ciśnienie, temperatura i czas.",
                    "en" => "Managing metalworking process parameters, such as pressure, temperature, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28402,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów, zapewniając odpowiednią wytrzymałość, dokładność i zgodność z rysunkami technicznymi.",
                    "en" => "Controlling the quality of completed parts, ensuring proper strength, accuracy, and compliance with technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28403,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi ślusarskich, takich jak klucze, piły, wiertła i młoty.",
                    "en" => "Repairing and maintaining locksmithing tools, such as wrenches, saws, drills, and hammers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28404,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki metali w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing metalworking processes to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28405,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy ślusarskiej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting locksmithing work results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FREZER = [
            [
                "id" => 28406,
                "name" => json_encode([
                    "pl" => "Obsługa frezów do obróbki skrawaniem, takich jak frezowanie detali metalowych i plastikowych.",
                    "en" => "Operating milling machines for cutting processes, such as milling metal and plastic parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28407,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu frezowania, takim jak prędkość, głębokość skrawania i dobór narzędzi skrawających.",
                    "en" => "Managing milling process parameters, such as speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28408,
                "name" => json_encode([
                    "pl" => "Kontrola jakości frezowanych elementów, zapewniając odpowiednią dokładność i gładkość powierzchni.",
                    "en" => "Controlling the quality of milled parts, ensuring proper accuracy and surface smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28409,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn frezujących.",
                    "en" => "Repairing and maintaining milling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28410,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu frezowania w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the milling process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28411,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu frezowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the milling process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_AUTOMATYCZNEJ_LINII_OBRÓBKI_SKRAWANIEM = [
            [
                "id" => 28412,
                "name" => json_encode([
                    "pl" => "Obsługa automatycznych linii obróbczych do skrawania, w tym ustawianie maszyn, monitorowanie pracy i kontrola jakości.",
                    "en" => "Operating automatic cutting lines, including machine setup, work monitoring, and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28413,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki skrawaniem na automatycznych liniach, takim jak prędkość, głębokość skrawania i czas pracy.",
                    "en" => "Managing cutting process parameters on automatic lines, such as speed, cutting depth, and operating time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28414,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji na linii obróbczej, zapewniając zgodność wymiarów i gładkość powierzchni.",
                    "en" => "Controlling production quality on the cutting line, ensuring dimension accuracy and surface smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28415,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja automatycznych maszyn obróbczych.",
                    "en" => "Repairing and maintaining automatic cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28416,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki skrawaniem w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the cutting process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28417,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki skrawaniem oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cutting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_OBRÓBKI_SKRAWANIEM = [
            [
                "id" => 28418,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do obróbki skrawaniem, takich jak frezarki, wiertarki, tokarki i inne urządzenia skrawające.",
                    "en" => "Operating machines for cutting, such as milling machines, drills, lathes, and other cutting devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28419,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki skrawaniem, takim jak prędkość obrotowa, głębokość cięcia, i dobór narzędzi.",
                    "en" => "Managing cutting process parameters, such as rotation speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28420,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skrawanych elementów, zapewniając ich precyzję, gładkość i zgodność z rysunkami technicznymi.",
                    "en" => "Controlling the quality of machined parts, ensuring their precision, smoothness, and compliance with technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28421,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do obróbki skrawaniem.",
                    "en" => "Repairing and maintaining cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28422,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki skrawaniem w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing the cutting process to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28423,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki skrawaniem oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the cutting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_DRUTU_LIN_SIATEK_I_KABLI = [
            [
                "id" => 28424,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji wyrobów z drutu, takich jak wytwarzanie lin, siatek i kabli.",
                    "en" => "Operating machines for producing wire-based products, such as making ropes, nets, and cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28425,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn i procesów, takich jak prędkość produkcji, napięcie drutu, i jakość materiału.",
                    "en" => "Managing machine and process parameters, such as production speed, wire tension, and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28426,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych wyrobów, zapewniając odpowiednią wytrzymałość, elastyczność i precyzję wymiarów.",
                    "en" => "Controlling the quality of produced items, ensuring proper strength, flexibility, and dimension precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28427,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji wyrobów z drutu, lin, siatek i kabli.",
                    "en" => "Repairing and maintaining machines for producing wire-based products, ropes, nets, and cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28428,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji w celu zwiększenia efektywności i jakości produkcji wyrobów z drutu.",
                    "en" => "Optimizing the production process to increase efficiency and quality of wire-based products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28429,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_ŁOŻYSK_TOCZNYCH = [
            [
                "id" => 28430,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji łożysk tocznych, takich jak maszyny do toczenia i szlifowania.",
                    "en" => "Operating machines and equipment for producing rolling bearings, such as turning and grinding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28431,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn, takich jak prędkość toczenia, ciśnienie, i dokładność wymiarów łożysk.",
                    "en" => "Managing machine parameters, such as turning speed, pressure, and bearing dimension accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28432,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych łożysk, zapewniając ich odpowiednią wytrzymałość, gładkość i tolerancje wymiarowe.",
                    "en" => "Controlling the quality of produced bearings, ensuring proper strength, smoothness, and dimensional tolerances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28433,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji łożysk tocznych.",
                    "en" => "Repairing and maintaining machines for producing rolling bearings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28434,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji łożysk tocznych w celu zwiększenia jakości i wydajności produkcji.",
                    "en" => "Optimizing the rolling bearing production process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28435,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OPAKOWAŃ_BLASZANYCH = [
            [
                "id" => 28436,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji opakowań blaszanych, takich jak cięcie, formowanie i zgrzewanie blach.",
                    "en" => "Operating machines for producing metal packaging, such as cutting, forming, and welding metal sheets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28437,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn, takim jak prędkość produkcji, ciśnienie i jakość materiału.",
                    "en" => "Managing machine parameters, such as production speed, pressure, and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28438,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych opakowań blaszanych, zapewniając odpowiednią wytrzymałość, szczelność i estetykę.",
                    "en" => "Controlling the quality of produced metal packaging, ensuring proper strength, sealing, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28439,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji opakowań blaszanych.",
                    "en" => "Repairing and maintaining machines for producing metal packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28440,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji opakowań blaszanych w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the metal packaging production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28441,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji opakowań oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the packaging production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_OBRABIAREK_STEROWANYCH_NUMERYCZNIE = [
            [
                "id" => 28442,
                "name" => json_encode([
                    "pl" => "Obsługa obrabiarek sterowanych numerycznie (CNC), takich jak frezarki, tokarki i wiertarki, do precyzyjnej obróbki materiałów.",
                    "en" => "Operating numerically controlled machines (CNC), such as milling machines, lathes, and drills, for precise material processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28443,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn CNC, takim jak prędkość obrotowa, głębokość cięcia, i narzędzia skrawające.",
                    "en" => "Managing CNC machine parameters, such as rotation speed, cutting depth, and cutting tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28444,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrobionych elementów, zapewniając ich precyzyjne wymiary i odpowiednią jakość powierzchni.",
                    "en" => "Controlling the quality of machined parts, ensuring precise dimensions and proper surface quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28445,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja obrabiarek sterowanych numerycznie.",
                    "en" => "Repairing and maintaining numerically controlled machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28446,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki w maszynach CNC w celu zwiększenia efektywności i jakości produkcji.",
                    "en" => "Optimizing the machining process in CNC machines to increase efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28447,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki CNC oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting CNC machining process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_OBRABIAREK_ZESPOŁOWYCH = [
            [
                "id" => 28448,
                "name" => json_encode([
                    "pl" => "Obsługa zespołowych obrabiarek, takich jak maszyny do obróbki skrawaniem, wytłaczania, i formowania, służących do produkcji komponentów.",
                    "en" => "Operating team-based machines, such as cutting, extrusion, and forming machines, used for component production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28449,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn i procesów, takich jak prędkość produkcji, ciśnienie i czas cyklu obróbczo-formującego.",
                    "en" => "Managing machine and process parameters, such as production speed, pressure, and machining-forming cycle time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28450,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji na maszynach zespołowych, zapewniając odpowiednią precyzję wymiarów i jakość wykończenia.",
                    "en" => "Controlling production quality on team-based machines, ensuring proper dimensional precision and surface finish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28451,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do obróbki zespołowej.",
                    "en" => "Repairing and maintaining team-based machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28452,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji w obrabiarkach zespołowych w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the production process in team-based machines to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28453,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki zespołowej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the team-based machining process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_WYWAŻANIA_I_CENTROWANIA = [
            [
                "id" => 28454,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wyważania i centrowania części maszyn, takich jak wirniki, wały i koła zamachowe.",
                    "en" => "Operating balancing and centering equipment for machine parts, such as rotors, shafts, and flywheels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28455,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wyważania, takim jak prędkość, moment obrotowy i dokładność centrowania.",
                    "en" => "Managing balancing process parameters, such as speed, torque, and centering accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28456,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyważonych i wycentrowanych części, zapewniając ich precyzję i niezawodność.",
                    "en" => "Controlling the quality of balanced and centered parts, ensuring their precision and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28457,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do wyważania i centrowania.",
                    "en" => "Repairing and maintaining balancing and centering equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28458,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wyważania w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the balancing process to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28459,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wyważania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the balancing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STRUGACZ = [
            [
                "id" => 28460,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do strugania drewna, metali lub innych materiałów, takich jak strugarki ręczne i elektryczne.",
                    "en" => "Operating machines for planing wood, metal, or other materials, such as hand and electric planers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28461,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu strugania, takim jak głębokość cięcia, prędkość narzędzia i rodzaj materiału.",
                    "en" => "Managing planing process parameters, such as cutting depth, tool speed, and material type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28462,
                "name" => json_encode([
                    "pl" => "Kontrola jakości struganych elementów, zapewniając odpowiednią gładkość, prostoliniowość i wymiary.",
                    "en" => "Controlling the quality of planed parts, ensuring proper smoothness, straightness, and dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28463,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn strugarskich.",
                    "en" => "Repairing and maintaining planing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28464,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu strugania w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing the planing process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28465,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu strugania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the planing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_METALI = [
            [
                "id" => 28466,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn szlifierskich do obróbki metali, takich jak szlifowanie płaskie, cylindryczne i precyzyjne.",
                    "en" => "Operating grinding machines for metal processing, such as surface, cylindrical, and precision grinding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28467,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu szlifowania, takim jak prędkość obrotowa, głębokość cięcia i rodzaj materiału.",
                    "en" => "Managing grinding process parameters, such as rotation speed, cutting depth, and material type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28468,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanych elementów, zapewniając odpowiednią gładkość, dokładność wymiarową i tolerancje.",
                    "en" => "Controlling the quality of ground parts, ensuring proper smoothness, dimensional accuracy, and tolerances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28469,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn szlifierskich.",
                    "en" => "Repairing and maintaining grinding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28470,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the grinding process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28471,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the grinding process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOKARZ_FREZER_OBRABIAREK_STEROWANYCH_NUMERYCZNIE = [
            [
                "id" => 28472,
                "name" => json_encode([
                    "pl" => "Obsługa tokarek i frezów CNC, w tym programowanie i ustawianie maszyn do precyzyjnej obróbki materiałów.",
                    "en" => "Operating CNC lathes and mills, including programming and setting up machines for precise material processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28473,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu obróbki skrawaniem, takim jak prędkość, głębokość cięcia i wybór narzędzi skrawających.",
                    "en" => "Managing cutting process parameters, such as speed, cutting depth, and selection of cutting tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28474,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrobionych elementów, zapewniając ich wymiarową dokładność i odpowiednią jakość powierzchni.",
                    "en" => "Controlling the quality of machined parts, ensuring dimensional accuracy and proper surface quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28475,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja obrabiarek CNC.",
                    "en" => "Repairing and maintaining CNC machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28476,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki skrawaniem w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the cutting process to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28477,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki skrawaniem i raportowanie wyników jakościowych.",
                    "en" => "Documenting the cutting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOKARZ_W_METALU = [
            [
                "id" => 28478,
                "name" => json_encode([
                    "pl" => "Obsługa tokarek do metalu, w tym cięcie, toczenie i formowanie elementów metalowych.",
                    "en" => "Operating metal lathes, including cutting, turning, and shaping metal parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28479,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami toczenia, takim jak prędkość obrotowa, głębokość cięcia, i dobór narzędzi.",
                    "en" => "Managing turning parameters, such as rotation speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28480,
                "name" => json_encode([
                    "pl" => "Kontrola jakości toczenia, zapewniając odpowiednią gładkość powierzchni i precyzję wymiarów.",
                    "en" => "Controlling turning quality, ensuring proper surface smoothness and dimensional precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28481,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja tokarek.",
                    "en" => "Repairing and maintaining lathes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28482,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu toczenia w celu poprawy jakości i efektywności produkcji.",
                    "en" => "Optimizing the turning process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28483,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników toczenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the turning process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $USTAWIACZ_MASZYN_DO_OBRÓBKI_SKRAWANIEM = [
            [
                "id" => 28484,
                "name" => json_encode([
                    "pl" => "Ustawianie maszyn do obróbki skrawaniem, takich jak tokarki, frezarki, wiertarki i inne urządzenia.",
                    "en" => "Setting up machines for cutting processes, such as lathes, milling machines, drills, and other devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28485,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami ustawień maszyn, takim jak prędkość cięcia, głębokość skrawania, i wybór narzędzi.",
                    "en" => "Managing machine setup parameters, such as cutting speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28486,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pracy maszyn i ustawionych parametrów, zapewniając dokładność i jakość obróbki.",
                    "en" => "Controlling the quality of machine work and setup parameters, ensuring accuracy and processing quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28487,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do obróbki skrawaniem.",
                    "en" => "Repairing and maintaining cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28488,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ustawiania maszyn w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing machine setup processes to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28489,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ustawiania maszyn oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting machine setup process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WIERTECZ_W_METALU = [
            [
                "id" => 28490,
                "name" => json_encode([
                    "pl" => "Obsługa wiertarek do obróbki metali, w tym wiercenie otworów w elementach metalowych.",
                    "en" => "Operating drilling machines for metalworking, including drilling holes in metal parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28491,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami wiertarki, takim jak prędkość obrotowa, głębokość wiercenia i dobór wierteł.",
                    "en" => "Managing drilling machine parameters, such as rotation speed, drilling depth, and drill selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28492,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych otworów, zapewniając ich odpowiednią średnicę, głębokość i precyzję.",
                    "en" => "Controlling the quality of drilled holes, ensuring proper diameter, depth, and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28493,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wiertarek.",
                    "en" => "Repairing and maintaining drilling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28494,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wiercenia w celu zwiększenia jakości i efektywności produkcji.",
                    "en" => "Optimizing the drilling process to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28495,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wiercenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the drilling process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI = [
            [
                "id" => 28496,
                "name" => json_encode([
                    "pl" => "Ustawianie i obsługa maszyn skrawających, takich jak tokarki, frezarki, wiertarki do obróbki metali.",
                    "en" => "Setting up and operating cutting machines, such as lathes, milling machines, and drills for metalworking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28497,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn, takim jak prędkość, głębokość skrawania i dobór narzędzi.",
                    "en" => "Managing machine parameters, such as speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28498,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrobionych elementów, zapewniając odpowiednią precyzję wymiarową i gładkość powierzchni.",
                    "en" => "Controlling the quality of machined parts, ensuring proper dimensional precision and surface smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28499,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja obrabiarek do metali.",
                    "en" => "Repairing and maintaining metalworking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28500,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbczych w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing machining processes to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28501,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów obróbczych i raportowanie wyników jakościowych.",
                    "en" => "Documenting machining process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_OBRABIAREK_SKRAWIAJĄCYCH = [
            [
                "id" => 28502,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn skrawających, takich jak tokarki, frezarki, wiertarki i inne urządzenia skrawające.",
                    "en" => "Operating cutting machines, such as lathes, milling machines, drills, and other cutting devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28503,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu skrawania, takim jak prędkość, głębokość cięcia i dobór narzędzi skrawających.",
                    "en" => "Managing cutting process parameters, such as speed, cutting depth, and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28504,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrobionych części, zapewniając ich precyzję wymiarową, krawędzie i jakość powierzchni.",
                    "en" => "Controlling the quality of machined parts, ensuring their dimensional precision, edges, and surface quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28505,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn skrawających.",
                    "en" => "Repairing and maintaining cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28506,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu skrawania w celu poprawy wydajności i jakości produkcji.",
                    "en" => "Optimizing the cutting process to improve production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28507,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu skrawania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting cutting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_METALU = [
            [
                "id" => 28508,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji wyrobów metalowych, takich jak cięcie, gięcie, spawanie i formowanie metali.",
                    "en" => "Operating machines for producing metal products, such as cutting, bending, welding, and forming metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28509,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn i procesów produkcji, takim jak ciśnienie, temperatura, i czas cyklu produkcyjnego.",
                    "en" => "Managing machine parameters and production processes, such as pressure, temperature, and production cycle time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28510,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych wyrobów metalowych, zapewniając ich wytrzymałość, precyzyjne wymiary i estetykę.",
                    "en" => "Controlling the quality of produced metal parts, ensuring their strength, dimensional precision, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28511,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do produkcji wyrobów metalowych.",
                    "en" => "Repairing and maintaining machines for producing metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28512,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów metalowych w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing the production process of metal products to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28513,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the production process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DOCIERACZ_POLEROWACZ = [
            [
                "id" => 28514,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do docierania i polerowania części metalowych, takich jak narzędzia, elementy maszyn i urządzenia.",
                    "en" => "Operating machines for lapping and polishing metal parts, such as tools, machine components, and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28515,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu docierania i polerowania, takim jak czas, prędkość obrotowa i rodzaj materiału ściernego.",
                    "en" => "Managing lapping and polishing process parameters, such as time, rotation speed, and abrasive material type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28516,
                "name" => json_encode([
                    "pl" => "Kontrola jakości docieranych i polerowanych części, zapewniając odpowiednią gładkość powierzchni i precyzyjne wymiary.",
                    "en" => "Controlling the quality of lapped and polished parts, ensuring proper surface smoothness and precise dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28517,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do docierania i polerowania.",
                    "en" => "Repairing and maintaining lapping and polishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28518,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu docierania i polerowania w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the lapping and polishing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28519,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu docierania i polerowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the lapping and polishing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_OSTRZARZ = [
            [
                "id" => 28520,
                "name" => json_encode([
                    "pl" => "Obsługa szlifierek do ostrzenia narzędzi, takich jak wiertła, noże, piły i inne elementy skrawające.",
                    "en" => "Operating grinding machines for sharpening tools, such as drills, knives, saws, and other cutting parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28521,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami szlifowania, takim jak prędkość obrotowa, ciśnienie i dobór materiału ściernego.",
                    "en" => "Managing grinding parameters, such as rotation speed, pressure, and abrasive material selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28522,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ostrzonych narzędzi, zapewniając ich odpowiednią ostrość, krawędzie i precyzję.",
                    "en" => "Controlling the quality of sharpened tools, ensuring proper sharpness, edges, and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28523,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn szlifierskich do ostrzenia.",
                    "en" => "Repairing and maintaining sharpening grinding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28524,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania w celu zwiększenia wydajności i jakości ostrzonych narzędzi.",
                    "en" => "Optimizing the grinding process to increase efficiency and quality of sharpened tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28525,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ostrzenia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the sharpening process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI = [
            [
                "id" => 28526,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z szlifowaniem narzędzi i polerowaniem elementów metalowych, takich jak narzędzia przemysłowe, części maszyn i urządzeń.",
                    "en" => "Performing tasks related to tool grinding and polishing metal parts, such as industrial tools, machine parts, and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28527,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu szlifowania i polerowania, takim jak prędkość, ciśnienie, oraz dobór narzędzi szlifierskich.",
                    "en" => "Managing grinding and polishing process parameters, such as speed, pressure, and selection of grinding tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28528,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanych i polerowanych elementów, zapewniając ich odpowiednią precyzję wymiarową i estetykę.",
                    "en" => "Controlling the quality of ground and polished parts, ensuring proper dimensional precision and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28529,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn szlifierskich i polerujących.",
                    "en" => "Repairing and maintaining grinding and polishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28530,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów szlifowania i polerowania w celu zwiększenia jakości i efektywności produkcji.",
                    "en" => "Optimizing grinding and polishing processes to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28531,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania i polerowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting grinding and polishing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PAKOWACZ_RĘCZNY = [
            [
                "id" => 28532,
                "name" => json_encode([
                    "pl" => "Pakowanie produktów do opakowań jednostkowych lub zbiorczych ręcznie lub z użyciem prostych narzędzi.",
                    "en" => "Manually packing products into individual or bulk packaging or using simple tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28533,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pakowanych produktów, upewniając się, że są zgodne z wymaganiami jakościowymi i odpowiednio zapakowane.",
                    "en" => "Controlling the quality of packed products, ensuring they meet quality requirements and are properly packed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28534,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania, w tym selekcja odpowiednich opakowań i materiałów pakowych.",
                    "en" => "Managing the packing process, including selecting appropriate packaging and packing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28535,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu używanego do pakowania, takiego jak taśmociągi czy maszyny pakujące.",
                    "en" => "Repairing and maintaining equipment used for packing, such as conveyors or packing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28536,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu pakowania, aby zwiększyć wydajność i jakość.",
                    "en" => "Optimizing the packing process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28537,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu pakowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting packing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RĘCZNY_ZNAKOWACZ_WYROBÓW = [
            [
                "id" => 28538,
                "name" => json_encode([
                    "pl" => "Ręczne znakowanie wyrobów zgodnie z wymaganiami jakościowymi i instrukcjami, używając narzędzi do znakowania.",
                    "en" => "Manually marking products according to quality requirements and instructions, using marking tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28539,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych znaków, zapewniając ich czytelność i zgodność z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of applied marks, ensuring their legibility and compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28540,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi służących do znakowania wyrobów.",
                    "en" => "Repairing and maintaining tools used for marking products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28541,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu zapewnienia prawidłowego znakowania wyrobów.",
                    "en" => "Collaborating with the production department to ensure proper product marking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28542,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu znakowania wyrobów, aby zwiększyć jakość i efektywność produkcji.",
                    "en" => "Optimizing the marking process to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28543,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu znakowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the marking process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŁADOWACZ = [
            [
                "id" => 28544,
                "name" => json_encode([
                    "pl" => "Załadunek towarów i materiałów na środki transportowe, takie jak pojazdy lub kontenery.",
                    "en" => "Loading goods and materials onto transportation vehicles or containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28545,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozmieszczeniem towarów w środkach transportowych, zapewniając ich bezpieczne i stabilne umiejscowienie.",
                    "en" => "Managing the arrangement of goods in transportation vehicles, ensuring their safe and stable placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28546,
                "name" => json_encode([
                    "pl" => "Kontrola jakości towarów i materiałów przed załadunkiem, upewniając się, że są one w odpowiednim stanie.",
                    "en" => "Controlling the quality of goods and materials before loading, ensuring they are in proper condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28547,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do załadunku towarów.",
                    "en" => "Repairing and maintaining equipment used for loading goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28548,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu załadunku w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the loading process to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28549,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu załadunku oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the loading process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAPEŁNIAJĄCY_ZBIORNIKI_PRZENOŚNE = [
            [
                "id" => 28550,
                "name" => json_encode([
                    "pl" => "Napełnianie przenośnych zbiorników cieczami lub materiałami sypkimi zgodnie z instrukcjami.",
                    "en" => "Filling portable containers with liquids or bulk materials according to instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28551,
                "name" => json_encode([
                    "pl" => "Kontrola ilości i jakości napełnianego materiału, upewniając się, że spełnia on wymagania.",
                    "en" => "Controlling the quantity and quality of the filled material, ensuring it meets requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28552,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do napełniania zbiorników przenośnych, takich jak pompy, wagi, lub dozowniki.",
                    "en" => "Operating equipment for filling portable containers, such as pumps, scales, or dispensers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28553,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do napełniania zbiorników.",
                    "en" => "Repairing and maintaining equipment used for filling containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28554,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu napełniania zbiorników w celu zwiększenia wydajności i bezpieczeństwa.",
                    "en" => "Optimizing the container filling process to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28555,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu napełniania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the filling process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_PRZEPUSTKOWY = [
            [
                "id" => 28556,
                "name" => json_encode([
                    "pl" => "Pakowanie, transportowanie i rozpakowywanie mebli oraz innych przedmiotów podczas przeprowadzki.",
                    "en" => "Packing, transporting, and unpacking furniture and other items during relocation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28557,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem mebli i przedmiotów, w tym załadunek i rozładunek.",
                    "en" => "Managing the transportation of furniture and items, including loading and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28558,
                "name" => json_encode([
                    "pl" => "Kontrola bezpieczeństwa transportowanych przedmiotów, aby zapobiec ich uszkodzeniu.",
                    "en" => "Controlling the safety of transported items to prevent damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28559,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu przeprowadzkowego, takiego jak wózki transportowe i materiały ochronne.",
                    "en" => "Repairing and maintaining relocation equipment, such as transport carts and protective materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28560,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przeprowadzki w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the relocation process to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28561,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników przeprowadzki oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting relocation process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_MAGAZYNOWY = [
            [
                "id" => 28562,
                "name" => json_encode([
                    "pl" => "Przyjmowanie, składowanie, oraz wydawanie towarów w magazynie zgodnie z procedurami.",
                    "en" => "Receiving, storing, and issuing goods in the warehouse according to procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28563,
                "name" => json_encode([
                    "pl" => "Kontrola jakości towarów przyjmowanych do magazynu, zapewniając ich zgodność z zamówieniami.",
                    "en" => "Controlling the quality of goods received in the warehouse, ensuring they match the orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28564,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozmieszczeniem towarów w magazynie, zapewniając efektywność składowania i dostępność.",
                    "en" => "Managing the arrangement of goods in the warehouse, ensuring storage efficiency and accessibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28565,
                "name" => json_encode([
                    "pl" => "Przygotowanie towarów do wysyłki lub transportu, pakowanie i zabezpieczanie.",
                    "en" => "Preparing goods for shipment or transport, including packaging and securing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28566,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń magazynowych, takich jak wózki widłowe, paleciaki czy przenośniki.",
                    "en" => "Operating warehouse equipment such as forklifts, pallet jacks, or conveyors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28567,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów magazynowych oraz utrzymywanie porządku w dokumentacji.",
                    "en" => "Documenting warehouse processes and maintaining order in documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_PRACUJĄCY_NA_RAMPIE = [
            [
                "id" => 28568,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów na rampie przy pomocy sprzętu transportowego.",
                    "en" => "Loading and unloading goods at the ramp using transport equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28569,
                "name" => json_encode([
                    "pl" => "Kontrola jakości towarów przybywających na rampę, sprawdzanie ich zgodności z dokumentacją.",
                    "en" => "Inspecting the quality of goods arriving at the ramp, checking their compliance with documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28570,
                "name" => json_encode([
                    "pl" => "Organizacja procesu załadunku i rozładunku w sposób zapewniający bezpieczeństwo i efektywność.",
                    "en" => "Organizing the loading and unloading process to ensure safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28571,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu zapewnienia płynności procesów transportowych.",
                    "en" => "Cooperating with other workers to ensure the smooth flow of transport processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28572,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu transportowego używanego na rampie.",
                    "en" => "Repairing and maintaining transport equipment used at the ramp."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28573,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów załadunkowych oraz utrzymywanie porządku w magazynie.",
                    "en" => "Documenting loading processes and maintaining order in the warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZTAUER_TRYMER = [
            [
                "id" => 28574,
                "name" => json_encode([
                    "pl" => "Trymowanie i przycinanie ładunków w magazynach lub na statkach, aby zapewnić ich odpowiednie rozmieszczenie.",
                    "en" => "Trimming and adjusting loads in warehouses or on ships to ensure proper placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28575,
                "name" => json_encode([
                    "pl" => "Kontrola równowagi i stabilności ładunków przed załadunkiem lub podczas transportu.",
                    "en" => "Controlling the balance and stability of loads before loading or during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28576,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami portowymi w celu sprawnej organizacji załadunku i rozładunku.",
                    "en" => "Cooperating with other port workers to ensure efficient loading and unloading organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28577,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu do trymowania i przycinania ładunków.",
                    "en" => "Repairing and maintaining load trimming and cutting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28578,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów trymowania i organizacji ładunków w celu poprawy wydajności i bezpieczeństwa.",
                    "en" => "Optimizing load trimming and organization processes to improve efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28579,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu trymowania ładunków i raportowanie wyników jakościowych.",
                    "en" => "Documenting the load trimming process and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRAGARZ = [
            [
                "id" => 28580,
                "name" => json_encode([
                    "pl" => "Transportowanie towarów ręcznie lub przy pomocy prostych narzędzi w obrębie magazynów, zakładów produkcyjnych lub podczas przeprowadzek.",
                    "en" => "Manually transporting goods or using simple tools within warehouses, production facilities, or during relocations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28581,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozmieszczeniem towarów w magazynie lub podczas transportu, zapewniając efektywność i bezpieczeństwo.",
                    "en" => "Managing the arrangement of goods in the warehouse or during transportation, ensuring efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28582,
                "name" => json_encode([
                    "pl" => "Pomoc w załadunku i rozładunku towarów, stosowanie technik bezpiecznego przenoszenia.",
                    "en" => "Assisting in loading and unloading goods, applying safe handling techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28583,
                "name" => json_encode([
                    "pl" => "Kontrola jakości transportowanych towarów, upewniając się, że są one w odpowiednim stanie.",
                    "en" => "Inspecting the quality of transported goods, ensuring they are in proper condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28584,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu do transportu ręcznego, takiego jak wózki, taczki, czy pasy transportowe.",
                    "en" => "Repairing and maintaining manual transport equipment, such as carts, wheelbarrows, or transport straps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28585,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów transportowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting transportation processes and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WAGOWY = [
            [
                "id" => 28586,
                "name" => json_encode([
                    "pl" => "Obsługa wag, ważących towary lub materiały, oraz rejestrowanie wyników pomiarów.",
                    "en" => "Operating scales for weighing goods or materials, and recording measurement results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28587,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem ważenia, zapewniając dokładność i zgodność z wymaganiami.",
                    "en" => "Managing the weighing process, ensuring accuracy and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28588,
                "name" => json_encode([
                    "pl" => "Kontrola jakości towarów ważących, upewniając się, że ich masa jest zgodna z dokumentacją.",
                    "en" => "Controlling the quality of weighed goods, ensuring their mass complies with documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28589,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wag oraz urządzeń pomiarowych.",
                    "en" => "Repairing and maintaining scales and measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28590,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ważenia w celu zwiększenia dokładności i efektywności.",
                    "en" => "Optimizing the weighing process to increase accuracy and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28591,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pomiarów wagowych i raportowanie wyników jakościowych.",
                    "en" => "Documenting weighing measurement results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW = [
            [
                "id" => 28592,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów, przenoszenie ładunków z jednego środka transportu do drugiego.",
                    "en" => "Loading and unloading goods, transferring loads from one means of transport to another."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28593,
                "name" => json_encode([
                    "pl" => "Przemieszczanie towarów w obrębie magazynów lub zakładów produkcyjnych.",
                    "en" => "Moving goods within warehouses or production plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28594,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozmieszczeniem towarów w magazynach w celu zapewnienia sprawnej organizacji przestrzeni.",
                    "en" => "Managing the arrangement of goods in warehouses to ensure efficient space organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28595,
                "name" => json_encode([
                    "pl" => "Kontrola jakości towarów przeładowanych, upewniając się, że nie zostały one uszkodzone.",
                    "en" => "Inspecting the quality of transshipped goods, ensuring they are not damaged."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28596,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń używanych do przeładunku towarów, takich jak dźwigi, suwnice i wózki widłowe.",
                    "en" => "Repairing and maintaining equipment used for transshipment, such as cranes, hoists, and forklifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28597,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów przeładunkowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting transshipment processes and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŁADOWACZ_NIECZYSTOŚCI_PŁYNNYCH = [
            [
                "id" => 28598,
                "name" => json_encode([
                    "pl" => "Załadunek i transport nieczystości płynnych do odpowiednich zbiorników lub urządzeń.",
                    "en" => "Loading and transporting liquid waste into appropriate containers or equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28599,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń służących do napełniania zbiorników nieczystościami płynnymi.",
                    "en" => "Operating equipment used for filling containers with liquid waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28600,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nieczystości płynnych oraz zapewnienie ich odpowiedniego przetwarzania lub usuwania.",
                    "en" => "Controlling the quality of liquid waste and ensuring proper processing or disposal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28601,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do transportu i przechowywania nieczystości płynnych.",
                    "en" => "Repairing and maintaining equipment for transporting and storing liquid waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28602,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ładowania nieczystości płynnych w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the process of loading liquid waste to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28603,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ładowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the loading process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŁADOWACZ_NIECZYSTOŚCI_STAŁYCH = [
            [
                "id" => 28604,
                "name" => json_encode([
                    "pl" => "Załadunek nieczystości stałych do odpowiednich zbiorników lub pojazdów transportowych.",
                    "en" => "Loading solid waste into appropriate containers or transport vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28605,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem ładowania nieczystości stałych, w tym dobór odpowiednich pojemników.",
                    "en" => "Managing the loading process of solid waste, including selecting appropriate containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28606,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nieczystości stałych przed ich załadunkiem, upewniając się, że są zgodne z wymaganiami.",
                    "en" => "Controlling the quality of solid waste before loading, ensuring it meets requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28607,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do ładowania nieczystości stałych.",
                    "en" => "Repairing and maintaining equipment used for loading solid waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28608,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ładowania nieczystości stałych w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the process of loading solid waste to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28609,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ładowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the loading process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_ZBIÓRKI_ODPADÓW = [
            [
                "id" => 28610,
                "name" => json_encode([
                    "pl" => "Zbieranie odpadów z wyznaczonych obszarów, takich jak ulice, parki, zakłady produkcyjne, i transportowanie ich do odpowiednich punktów zbiórki.",
                    "en" => "Collecting waste from designated areas, such as streets, parks, production facilities, and transporting it to appropriate collection points."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28611,
                "name" => json_encode([
                    "pl" => "Sortowanie odpadów przed ich transportem, aby oddzielić materiały nadające się do recyklingu.",
                    "en" => "Sorting waste before transportation to separate materials suitable for recycling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28612,
                "name" => json_encode([
                    "pl" => "Obsługa pojazdów transportowych wykorzystywanych do zbiórki odpadów, takich jak śmieciarki.",
                    "en" => "Operating transport vehicles used for waste collection, such as garbage trucks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28613,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zbieranych odpadów, upewniając się, że nie ma materiałów niepożądanych.",
                    "en" => "Controlling the quality of collected waste, ensuring there are no undesirable materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28614,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do zbiórki odpadów, takiego jak kontenery i pojazdy transportowe.",
                    "en" => "Repairing and maintaining equipment used for waste collection, such as containers and transport vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28615,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zbiórki odpadów i raportowanie wyników jakościowych.",
                    "en" => "Documenting waste collection process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ŁADOWACZE_NIECZYSTOŚCI = [
            [
                "id" => 28616,
                "name" => json_encode([
                    "pl" => "Załadunek i transport nieczystości stałych lub płynnych do odpowiednich zbiorników lub urządzeń.",
                    "en" => "Loading and transporting solid or liquid waste into appropriate containers or equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28617,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem ładowania nieczystości, w tym dobór odpowiednich narzędzi i urządzeń do pracy.",
                    "en" => "Managing the waste loading process, including selecting appropriate tools and equipment for the job."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28618,
                "name" => json_encode([
                    "pl" => "Kontrola jakości załadowanych nieczystości, zapewniając ich zgodność z wymaganiami.",
                    "en" => "Controlling the quality of loaded waste, ensuring compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28619,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do ładowania nieczystości.",
                    "en" => "Repairing and maintaining equipment used for loading waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28620,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ładowania nieczystości w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the waste loading process to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28621,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ładowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the loading process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_OCZYSZCZANIA_MIASTA = [
            [
                "id" => 28622,
                "name" => json_encode([
                    "pl" => "Zbieranie odpadów z ulic, chodników i innych publicznych przestrzeni miejskich.",
                    "en" => "Collecting waste from streets, sidewalks, and other public urban spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28623,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac porządkowych na terenach publicznych, w tym zamiatanie, usuwanie śmieci oraz opróżnianie koszy na śmieci.",
                    "en" => "Performing cleaning tasks in public areas, including sweeping, removing trash, and emptying trash bins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28624,
                "name" => json_encode([
                    "pl" => "Dbałość o utrzymanie porządku na placach i skwerach miejskich, usuwanie zanieczyszczeń.",
                    "en" => "Maintaining order in city squares and parks, removing pollution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28625,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do oczyszczania miejskich przestrzeni, takich jak zamiatarki, odkurzacze uliczne.",
                    "en" => "Operating machines and equipment for cleaning urban spaces, such as street sweepers and vacuum street cleaners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28626,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem oczyszczania, zapewniając, że prace są wykonywane zgodnie z harmonogramem i normami jakości.",
                    "en" => "Managing the cleaning process, ensuring that work is done according to schedule and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28627,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników oczyszczania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting cleaning results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_PLACOWY = [
            [
                "id" => 28628,
                "name" => json_encode([
                    "pl" => "Zadbanie o czystość na placach, w parkach i innych przestrzeniach zewnętrznych, w tym zamiatanie i sprzątanie.",
                    "en" => "Maintaining cleanliness in squares, parks, and other outdoor spaces, including sweeping and cleaning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28629,
                "name" => json_encode([
                    "pl" => "Zbieranie śmieci z terenów publicznych, opróżnianie koszy na śmieci i zapewnianie porządku w otoczeniu.",
                    "en" => "Collecting trash from public areas, emptying trash bins, and ensuring the surroundings are tidy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28630,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi i maszyn do utrzymania czystości na placach, w tym odkurzaczy, zamiatarek.",
                    "en" => "Operating tools and machines for maintaining cleanliness in squares, including vacuums and sweepers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28631,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pracy przy oczyszczaniu przestrzeni publicznych.",
                    "en" => "Controlling the quality of work when cleaning public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28632,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do oczyszczania placów.",
                    "en" => "Repairing and maintaining equipment used for cleaning squares."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28633,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników oczyszczania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting cleaning results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZAMIATACZ = [
            [
                "id" => 28634,
                "name" => json_encode([
                    "pl" => "Zamiatanie chodników, ulic, placów oraz innych przestrzeni publicznych.",
                    "en" => "Sweeping sidewalks, streets, squares, and other public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28635,
                "name" => json_encode([
                    "pl" => "Prace porządkowe na terenach miejskich, w tym usuwanie liści, śmieci i innych odpadków.",
                    "en" => "Cleaning tasks in urban areas, including removing leaves, trash, and other debris."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28636,
                "name" => json_encode([
                    "pl" => "Używanie maszyn do zamiatania ulic, chodników i innych powierzchni, takich jak zamiatarki uliczne.",
                    "en" => "Using street sweeping machines for cleaning streets, sidewalks, and other surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28637,
                "name" => json_encode([
                    "pl" => "Kontrola jakości sprzątanych terenów, upewniając się, że są one dokładnie oczyszczone.",
                    "en" => "Controlling the quality of cleaned areas, ensuring they are thoroughly cleaned."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28638,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu do zamiatania.",
                    "en" => "Repairing and maintaining sweeping equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28639,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników prac porządkowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting cleaning work results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ZAMIAATACZE_I_POKREWNI = [
            [
                "id" => 28640,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z zamiataniem ulic, chodników, placów, parków, oraz innych przestrzeni miejskich.",
                    "en" => "Performing tasks related to sweeping streets, sidewalks, squares, parks, and other urban spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28641,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do zamiatania i czyszczenia, takich jak maszyny do zamiatania ulic.",
                    "en" => "Operating equipment for sweeping and cleaning, such as street sweeping machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28642,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanej pracy, upewniając się, że powierzchnie są dokładnie oczyszczone.",
                    "en" => "Controlling the quality of the work performed, ensuring surfaces are thoroughly cleaned."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28643,
                "name" => json_encode([
                    "pl" => "Prace związane z porządkowaniem terenu, usuwanie niepożądanych materiałów i śmieci.",
                    "en" => "Tasks related to site cleaning, removing unwanted materials and trash."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28644,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu do zamiatania.",
                    "en" => "Repairing and maintaining sweeping equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28645,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników zamiatania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting sweeping results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_PRAC_DORYWCZYCH = [
            [
                "id" => 28646,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac dorywczych w różnych branżach, takich jak pomoc w magazynach, porządkowanie terenu czy inne zadania pomocnicze.",
                    "en" => "Performing occasional tasks in various industries, such as assisting in warehouses, cleaning areas, or other auxiliary tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28647,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji pracy, wykonywanie prostych zadań na zlecenie przełożonego.",
                    "en" => "Assisting in organizing work, performing simple tasks assigned by a supervisor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28648,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami i narzędziami potrzebnymi do wykonania zleconych prac.",
                    "en" => "Managing materials and tools required for performing assigned tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28649,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku, rozładunku towarów oraz innych zadaniach związanych z transportem.",
                    "en" => "Assisting with loading, unloading goods, and other tasks related to transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28650,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na stanowisku pracy, dbanie o czystość i organizację.",
                    "en" => "Maintaining cleanliness and organization at the work station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28651,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych zadań oraz raportowanie wyników pracy.",
                    "en" => "Documenting completed tasks and reporting on work outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STATYSTA = [
            [
                "id" => 28652,
                "name" => json_encode([
                    "pl" => "Udział w produkcjach filmowych, telewizyjnych i teatralnych jako statysta, odgrywanie roli tła w scenach.",
                    "en" => "Participating in film, television, and theater productions as an extra, playing background roles in scenes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28653,
                "name" => json_encode([
                    "pl" => "Utrzymywanie odpowiedniej postawy i zachowań na planie, zgodnie z wymaganiami reżysera i producenta.",
                    "en" => "Maintaining the proper posture and behavior on set, according to the director's and producer's requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28654,
                "name" => json_encode([
                    "pl" => "Współpraca z ekipą filmową i innymi aktorami, odgrywanie prostych ról w tle.",
                    "en" => "Collaborating with the film crew and other actors, playing simple background roles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28655,
                "name" => json_encode([
                    "pl" => "Dostosowywanie się do wymagań reżysera i ekipy filmowej podczas prób i nagrań.",
                    "en" => "Adapting to the director's and film crew's requirements during rehearsals and filming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28656,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniach do scen, takich jak ustawianie rekwizytów i tła.",
                    "en" => "Assisting in preparing for scenes, such as setting up props and background."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28657,
                "name" => json_encode([
                    "pl" => "Współpraca z resztą ekipy, aby zapewnić płynność produkcji.",
                    "en" => "Cooperating with the rest of the crew to ensure the smooth production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_WYKONUJĄCY_DORYWCZE_PRACE_PROSTE = [
            [
                "id" => 28658,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych, dorywczych prac pomocniczych, takich jak porządkowanie terenu, przenoszenie materiałów czy prace magazynowe.",
                    "en" => "Performing simple, occasional auxiliary tasks, such as cleaning, moving materials, or warehouse work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28659,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku, rozładunku towarów i materiałów, organizacja przestrzeni w miejscu pracy.",
                    "en" => "Assisting in loading, unloading goods and materials, organizing space at the work site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28660,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbałość o czystość i organizację.",
                    "en" => "Maintaining order at the workplace, ensuring cleanliness and organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28661,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami, aby wykonać zadania zgodnie z wymaganiami.",
                    "en" => "Collaborating with other workers to complete tasks according to requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28662,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami i narzędziami w czasie wykonywania pracy.",
                    "en" => "Managing materials and tools during the performance of tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28663,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie wyników.",
                    "en" => "Documenting completed work and reporting on outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_KOPERTUJĄCYCH = [
            [
                "id" => 28664,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji kopert, w tym załadunek materiałów oraz kontrola jakości gotowych kopert.",
                    "en" => "Operating envelope machines, including loading materials and quality control of finished envelopes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28665,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyprodukowanych kopert, zapewniając ich odpowiednią wielkość, jakość papieru i dokładność wykonania.",
                    "en" => "Controlling the quality of produced envelopes, ensuring proper size, paper quality, and accuracy of manufacture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28666,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji kopert, zapewniając ciągłość produkcji i minimalizując przestoje.",
                    "en" => "Managing the envelope production process, ensuring continuous production and minimizing downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28667,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn kopertujących oraz urządzeń pomocniczych.",
                    "en" => "Repairing and maintaining envelope machines and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28668,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji kopert, aby zwiększyć efektywność i jakość produkcji.",
                    "en" => "Optimizing envelope production processes to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28669,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting production results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_MYCIA_NAPEŁNIANIA_I_ZAMYKANIA_BUTELEK = [
            [
                "id" => 28670,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do mycia, napełniania i zamykania butelek w procesie produkcji napojów lub innych płynów.",
                    "en" => "Operating machines for washing, filling, and sealing bottles in the production process of beverages or other liquids."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28671,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mycia, napełniania i zamykania butelek, zapewniając odpowiednią higienę oraz zgodność z normami jakościowymi.",
                    "en" => "Controlling the quality of washing, filling, and sealing bottles, ensuring proper hygiene and compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28672,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem mycia, napełniania i zamykania butelek, dbając o wydajność produkcji.",
                    "en" => "Managing the washing, filling, and sealing process, ensuring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28673,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do mycia, napełniania i zamykania butelek.",
                    "en" => "Repairing and maintaining machines for washing, filling, and sealing bottles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28674,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów mycia, napełniania i zamykania butelek w celu zwiększenia efektywności i jakości produkcji.",
                    "en" => "Optimizing the washing, filling, and sealing processes to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28675,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu mycia, napełniania i zamykania butelek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting washing, filling, and sealing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PAKUJĄCYCH = [
            [
                "id" => 28676,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn pakujących, takich jak maszyny do pakowania produktów w opakowania jednostkowe lub zbiorcze.",
                    "en" => "Operating packaging machines, such as machines for packing products into individual or bulk packages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28677,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pakowanych produktów, zapewniając ich odpowiednie opakowanie i zgodność z normami.",
                    "en" => "Controlling the quality of packaged products, ensuring they are properly packed and meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28678,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania, monitorowanie efektywności maszyn pakujących.",
                    "en" => "Managing the packaging process, monitoring the efficiency of packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28679,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn pakujących, w tym wymiana części eksploatacyjnych.",
                    "en" => "Repairing and maintaining packaging machines, including replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28680,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu pakowania, aby zwiększyć wydajność i jakość produkcji.",
                    "en" => "Optimizing the packaging process to increase efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28681,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu pakowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the packaging process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_ZNAKUJĄCYCH = [
            [
                "id" => 28682,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do znakowania produktów, takich jak maszyny do etykietowania, nadruku daty ważności, kodów kreskowych.",
                    "en" => "Operating marking machines, such as labelers, date printing, and barcode printers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28683,
                "name" => json_encode([
                    "pl" => "Kontrola jakości znakowanych produktów, zapewniając czytelność etykiet i prawidłowość informacji.",
                    "en" => "Controlling the quality of marked products, ensuring label legibility and correctness of information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28684,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem znakowania, monitorowanie pracy urządzeń znakujących i zapewnienie ich prawidłowego działania.",
                    "en" => "Managing the marking process, monitoring the operation of marking devices, and ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28685,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń znakujących, takich jak maszyny do drukowania, etykietowania i naklejania.",
                    "en" => "Repairing and maintaining marking equipment, such as printing, labeling, and affixing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28686,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu znakowania w celu zwiększenia efektywności i dokładności produkcji.",
                    "en" => "Optimizing the marking process to increase efficiency and accuracy of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28687,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu znakowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the marking process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_PAKUJĄCYCH_ZNAKUJĄCYCH_I_URZĄDZEŃ_DO_NAPEŁNIANIA_BUTELEK = [
            [
                "id" => 28688,
                "name" => json_encode([
                    "pl" => "Obsługa różnych maszyn do pakowania, znakowania i napełniania butelek.",
                    "en" => "Operating various machines for packaging, marking, and filling bottles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28689,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów pakowanych, znakowanych i napełnianych, zapewniając zgodność z wymaganiami.",
                    "en" => "Controlling the quality of packaged, marked, and filled products, ensuring compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28690,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn wykorzystywanych do pakowania, znakowania oraz napełniania butelek.",
                    "en" => "Repairing and maintaining machines used for packaging, marking, and filling bottles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28691,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów pakowania, znakowania i napełniania butelek w celu zwiększenia efektywności.",
                    "en" => "Optimizing packaging, marking, and bottle filling processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28692,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji, zapewniając płynność działań związanych z pakowaniem, znakowaniem i napełnianiem butelek.",
                    "en" => "Managing the production process, ensuring the smooth flow of activities related to packaging, marking, and filling bottles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28693,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu pakowania, znakowania i napełniania butelek oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the packaging, marking, and filling bottle process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PALETYZACJI = [
            [
                "id" => 28694,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do paletyzacji, w tym załadunek produktów na palety i ich układanie zgodnie z wymaganiami.",
                    "en" => "Operating palletizing machines, including loading products onto pallets and arranging them according to requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28695,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu paletyzacji, upewniając się, że produkty są prawidłowo ułożone na paletach.",
                    "en" => "Controlling the quality of the palletizing process, ensuring products are properly arranged on pallets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28696,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem paletyzacji, monitorowanie wydajności maszyn i minimalizacja przestojów.",
                    "en" => "Managing the palletizing process, monitoring machine performance, and minimizing downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28697,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do paletyzacji, w tym wymiana części eksploatacyjnych.",
                    "en" => "Repairing and maintaining palletizing equipment, including replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28698,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu paletyzacji, aby zwiększyć wydajność i jakość produkcji.",
                    "en" => "Optimizing the palletizing process to increase efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28699,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu paletyzacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the palletizing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_UTYLIZACJI_SUROWCÓW_ZWIERZĘCYCH = [
            [
                "id" => 28700,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń służących do utylizacji surowców zwierzęcych, takich jak maszyny do przetwarzania odpadów zwierzęcych.",
                    "en" => "Operating equipment used for the disposal of animal by-products, such as machines for processing animal waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28701,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesów utylizacji surowców zwierzęcych, upewniając się, że procesy są zgodne z przepisami sanitarnymi.",
                    "en" => "Controlling the quality of animal by-product disposal processes, ensuring compliance with sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28702,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem utylizacji, monitorowanie wydajności urządzeń oraz minimalizowanie przestojów.",
                    "en" => "Managing the disposal process, monitoring equipment performance, and minimizing downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28703,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do utylizacji surowców zwierzęcych.",
                    "en" => "Repairing and maintaining equipment used for the disposal of animal by-products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28704,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów utylizacji surowców zwierzęcych w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing animal by-product disposal processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28705,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu utylizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting disposal process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_INNYCH_MASZYN_I_URZĄDZEŃ_PRZETWÓRCZYCH = [
            [
                "id" => 28706,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń przetwórczych w różnych branżach, takich jak przemysł spożywczy, chemiczny czy tekstylny.",
                    "en" => "Operating processing machines and equipment in various industries, such as food, chemical, or textile industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28707,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przetworzonych produktów, zapewniając ich zgodność z wymaganiami technologicznymi.",
                    "en" => "Controlling the quality of processed products, ensuring compliance with technological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28708,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem przetwarzania, monitorowanie wydajności urządzeń i minimalizowanie przestojów.",
                    "en" => "Managing the processing process, monitoring equipment performance, and minimizing downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28709,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń przetwórczych, w tym wymiana części eksploatacyjnych.",
                    "en" => "Repairing and maintaining processing equipment, including replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28710,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przetwórczych w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing processing processes to increase efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28711,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przetwarzania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting processing results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONFEKCJONER_WYROBÓW_GUMOWYCH = [
            [
                "id" => 28712,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do konfekcjonowania wyrobów gumowych, takich jak cięcie, formowanie i pakowanie produktów.",
                    "en" => "Operating machines for packaging rubber products, such as cutting, forming, and packing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28713,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów gumowych podczas procesu konfekcjonowania, upewniając się, że produkty są zgodne z normami.",
                    "en" => "Controlling the quality of rubber products during the packaging process, ensuring products meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28714,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konfekcjonowania wyrobów gumowych, zapewniając ciągłość produkcji.",
                    "en" => "Managing the rubber product packaging process, ensuring continuous production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28715,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do konfekcjonowania wyrobów gumowych.",
                    "en" => "Repairing and maintaining machines for packaging rubber products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28716,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu konfekcjonowania wyrobów gumowych w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing the rubber product packaging process to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28717,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu konfekcjonowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting packaging process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_WYROBÓW_TEKSTYLNYCH_Z_TEKTURY_I_POKREWNYCH_MATERIAŁÓW = [
            [
                "id" => 28718,
                "name" => json_encode([
                    "pl" => "Montaż wyrobów tekstylnych, z tektury i pokrewnych materiałów, takich jak odzież, torby, opakowania.",
                    "en" => "Assembling textile products, cardboard, and related materials, such as clothing, bags, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28719,
                "name" => json_encode([
                    "pl" => "Kontrola jakości montowanych produktów, zapewniając ich zgodność z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of assembled products, ensuring compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28720,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem montażu wyrobów tekstylnych, z tektury i innych materiałów.",
                    "en" => "Managing the assembly process of textile products, cardboard, and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28721,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn wykorzystywanych do montażu wyrobów tekstylnych, z tektury i pokrewnych materiałów.",
                    "en" => "Repairing and maintaining machines used for assembling textile products, cardboard, and related materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28722,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu montażu wyrobów w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing the assembly process to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28723,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu montażu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the assembly process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_WYROBÓW_Z_TWORZYW_SZTUCZNYCH = [
            [
                "id" => 28724,
                "name" => json_encode([
                    "pl" => "Montaż wyrobów z tworzyw sztucznych, takich jak akcesoria, obudowy, części do maszyn.",
                    "en" => "Assembling plastic products, such as accessories, housings, and machine parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28725,
                "name" => json_encode([
                    "pl" => "Kontrola jakości montowanych produktów z tworzyw sztucznych, zapewniając ich zgodność z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of assembled plastic products, ensuring compliance with technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28726,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem montażu wyrobów z tworzyw sztucznych, w tym optymalizacja wydajności produkcji.",
                    "en" => "Managing the assembly process of plastic products, including optimizing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28727,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn wykorzystywanych do montażu wyrobów z tworzyw sztucznych.",
                    "en" => "Repairing and maintaining machines used for assembling plastic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28728,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu montażu wyrobów z tworzyw sztucznych w celu zwiększenia wydajności.",
                    "en" => "Optimizing the assembly process of plastic products to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28729,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu montażu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the assembly process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SKŁADACZ_SPRZĘTU_SPADOCHRONOWEGO = [
            [
                "id" => 28730,
                "name" => json_encode([
                    "pl" => "Składanie i przygotowywanie sprzętu spadochronowego do użycia, w tym kontrolowanie stanu technicznego sprzętu.",
                    "en" => "Folding and preparing parachute equipment for use, including checking the equipment's technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28731,
                "name" => json_encode([
                    "pl" => "Kontrola jakości sprzętu spadochronowego, upewniając się, że jest gotowy do użycia i zgodny z normami bezpieczeństwa.",
                    "en" => "Controlling the quality of parachute equipment, ensuring it is ready for use and meets safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28732,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu spadochronowego, w tym wymiana uszkodzonych lub zużytych części.",
                    "en" => "Repairing and maintaining parachute equipment, including replacing damaged or worn parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28733,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem składania sprzętu spadochronowego, dbając o jego bezpieczeństwo i skuteczność.",
                    "en" => "Managing the parachute folding process, ensuring its safety and effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28734,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników kontroli sprzętu spadochronowego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting parachute equipment inspection results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28735,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu składania sprzętu spadochronowego w celu zwiększenia efektywności i bezpieczeństwa.",
                    "en" => "Optimizing the parachute folding process to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_GDZIE_INDZIJES_NIESKLASYFIKOWANI = [
            [
                "id" => 28736,
                "name" => json_encode([
                    "pl" => "Montaż różnych elementów i urządzeń w branżach budowlanych, przemysłowych lub innych, w zależności od potrzeb.",
                    "en" => "Assembly of various components and devices in construction, industrial, or other sectors as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28737,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac montażowych zgodnie z projektem, przy użyciu odpowiednich narzędzi i maszyn.",
                    "en" => "Performing assembly work according to the project using appropriate tools and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28738,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zamontowanych elementów, zapewniając ich prawidłowe działanie.",
                    "en" => "Controlling the quality of assembled components to ensure proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28739,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do montażu oraz ich części eksploatacyjnych.",
                    "en" => "Repairing and maintaining equipment used for assembly, including replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28740,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów montażu w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing assembly processes to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28741,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników montażu i raportowanie wyników jakościowych.",
                    "en" => "Documenting assembly results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZMYWACZ_GRAFFITI = [
            [
                "id" => 28742,
                "name" => json_encode([
                    "pl" => "Usuwanie graffiti ze ścian, budynków, pomników i innych powierzchni przy użyciu odpowiednich chemikaliów i narzędzi.",
                    "en" => "Removing graffiti from walls, buildings, monuments, and other surfaces using appropriate chemicals and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28743,
                "name" => json_encode([
                    "pl" => "Kontrola jakości usuniętych graffiti, upewniając się, że powierzchnie są oczyszczone bez uszkodzeń.",
                    "en" => "Controlling the quality of graffiti removal, ensuring that surfaces are cleaned without damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28744,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do usunięcia graffiti, w tym zabezpieczenie terenu i użycie odpowiednich narzędzi.",
                    "en" => "Preparing surfaces for graffiti removal, including securing the area and using appropriate tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28745,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem usuwania graffiti, dbając o bezpieczeństwo pracy oraz jakość wykonania.",
                    "en" => "Managing the graffiti removal process, ensuring safety at work and quality of execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28746,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do usuwania graffiti, w tym czyszczenie i konserwacja narzędzi.",
                    "en" => "Repairing and maintaining equipment used for graffiti removal, including cleaning and maintaining tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28747,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting completed tasks and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_KOPALNIACH_I_KAMIENIOŁOMACH = [
            [
                "id" => 28748,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych w kopalniach i kamieniołomach, takich jak transport materiałów i utrzymanie porządku.",
                    "en" => "Performing simple auxiliary tasks in mines and quarries, such as material transport and maintaining cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28749,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem materiałów w kopalniach i kamieniołomach oraz pomoc przy załadunku i rozładunku.",
                    "en" => "Managing material transport in mines and quarries and assisting with loading and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28750,
                "name" => json_encode([
                    "pl" => "Pomoc w pracach przy wydobyciu i obróbce surowców mineralnych.",
                    "en" => "Assisting in extraction and processing of mineral raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28751,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem wykorzystywanym do transportu materiałów w kopalniach i kamieniołomach.",
                    "en" => "Managing equipment used for transporting materials in mines and quarries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28752,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów transportowanych w kopalniach i kamieniołomach.",
                    "en" => "Controlling the quality of materials transported in mines and quarries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28753,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting completed tasks and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOPACZ = [
            [
                "id" => 28754,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z wykopami w ziemi, w tym wykopanie studni, kanałów czy fundamentów.",
                    "en" => "Performing digging tasks, such as digging wells, channels, or foundations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28755,
                "name" => json_encode([
                    "pl" => "Wykorzystanie odpowiednich narzędzi i maszyn do kopania, takich jak łopaty, koparki czy wiertnice.",
                    "en" => "Using appropriate tools and machines for digging, such as shovels, excavators, or drilling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28756,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykopanych materiałów, zapewniając zgodność z wymaganiami technologicznymi.",
                    "en" => "Controlling the quality of excavated materials, ensuring compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28757,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw i konserwacji sprzętu wykorzystywanego do wykopów.",
                    "en" => "Repairing and maintaining equipment used for excavation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28758,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wykopów, zapewniając efektywność i bezpieczeństwo prac.",
                    "en" => "Managing the excavation process, ensuring work efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28759,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wykopów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting excavation results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MELIORANT = [
            [
                "id" => 28760,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z melioracją gruntów, w tym regulacja rzek, budowa rowów i drenaży.",
                    "en" => "Performing land reclamation tasks, including river regulation, construction of ditches and drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28761,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do melioracji, takiego jak koparki, dreny czy maszyny do regulacji rzek.",
                    "en" => "Operating reclamation equipment such as excavators, drains, or river regulation machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28762,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac melioracyjnych, zapewniając ich zgodność z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of performed reclamation work, ensuring compliance with technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28763,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem melioracji, monitorowanie wydajności maszyn i zapewnianie odpowiednich wyników.",
                    "en" => "Managing the reclamation process, monitoring machine performance, and ensuring proper outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28764,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu melioracyjnego.",
                    "en" => "Repairing and maintaining reclamation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28765,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników melioracji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting reclamation results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OCZYSZCZACZ_KANALIZACYJNY = [
            [
                "id" => 28766,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prac związanych z oczyszczaniem sieci kanalizacyjnych, usuwanie zatorów oraz czyszczenie rur.",
                    "en" => "Performing tasks related to cleaning sewage systems, removing blockages, and cleaning pipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28767,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu kanalizacyjnego, takiego jak węże, pompy i maszyny do czyszczenia rur.",
                    "en" => "Operating sewage equipment such as hoses, pumps, and pipe cleaning machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28768,
                "name" => json_encode([
                    "pl" => "Kontrola jakości oczyszczania kanalizacji, zapewniając jej prawidłowe funkcjonowanie.",
                    "en" => "Controlling the quality of sewer cleaning, ensuring its proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28769,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do oczyszczania kanalizacji.",
                    "en" => "Repairing and maintaining equipment used for sewer cleaning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28770,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem oczyszczania kanalizacji, dbając o bezpieczeństwo i efektywność pracy.",
                    "en" => "Managing the sewer cleaning process, ensuring safety and work efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28771,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników oczyszczania kanalizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting sewer cleaning results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_DROGOWYM_WODNYM_I_POKREWNI = [
            [
                "id" => 28772,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych w budownictwie drogowym i wodnym, takich jak kopanie rowów, prace przy układaniu nawierzchni.",
                    "en" => "Performing simple auxiliary tasks in road and water construction, such as digging trenches, assisting with paving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28773,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów budowlanych do pracy, w tym transportowanie, sortowanie i układanie materiałów.",
                    "en" => "Preparing construction materials for work, including transporting, sorting, and arranging materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28774,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac ręcznych przy budowie dróg, mostów, rzek i innych struktur wodnych.",
                    "en" => "Performing simple manual tasks in road, bridge, river, and other water structures construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28775,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na stanowisku pracy, dbając o bezpieczeństwo i organizację przestrzeni roboczej.",
                    "en" => "Maintaining cleanliness at the work site, ensuring safety and organization of the workspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28776,
                "name" => json_encode([
                    "pl" => "Asystowanie w pracach przy układaniu nawierzchni drogowych i robót ziemnych.",
                    "en" => "Assisting in tasks related to road paving and earthworks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28777,
                "name" => json_encode([
                    "pl" => "Transportowanie materiałów budowlanych i maszyn na placu budowy.",
                    "en" => "Transporting construction materials and equipment on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_CZĘŚCI_SPRZĘTU = [
            [
                "id" => 28778,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa maszyn, urządzeń i części mechanicznych, takich jak silniki, pompy, zawory.",
                    "en" => "Maintaining and repairing machines, equipment, and mechanical parts such as engines, pumps, and valves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28779,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego sprzętu oraz wymiana zużytych części.",
                    "en" => "Checking the technical condition of equipment and replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28780,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji sprzętu, zapewniając jego prawidłowe działanie.",
                    "en" => "Managing the equipment maintenance process to ensure proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28781,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych napraw sprzętu, usuwanie usterek i zapewnianie jego sprawności.",
                    "en" => "Performing simple repairs of equipment, troubleshooting and ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28782,
                "name" => json_encode([
                    "pl" => "Dokumentowanie stanu technicznego maszyn i raportowanie wyników konserwacji.",
                    "en" => "Documenting the technical condition of machines and reporting maintenance results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28783,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów konserwacji sprzętu w celu wydłużenia jego żywotności.",
                    "en" => "Optimizing equipment maintenance processes to extend its lifespan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICZY_ROBOTNIK_PRZEMYSŁOWY = [
            [
                "id" => 28784,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych w przemyśle, takich jak transport materiałów, pakowanie, montaż.",
                    "en" => "Performing simple auxiliary tasks in industry, such as material transport, packing, and assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28785,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku i rozładunku materiałów, pomoc w obsłudze maszyn i urządzeń.",
                    "en" => "Assisting with loading and unloading materials, helping with the operation of machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28786,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbanie o organizację przestrzeni roboczej.",
                    "en" => "Maintaining cleanliness in the workplace, ensuring organization of the workspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28787,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ręcznych w zakresie produkcji i pakowania towarów.",
                    "en" => "Performing manual labor in the production and packaging of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28788,
                "name" => json_encode([
                    "pl" => "Pomoc przy obsłudze urządzeń przemysłowych, takich jak maszyny pakujące i transportowe.",
                    "en" => "Assisting with the operation of industrial equipment, such as packing and transport machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28789,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy oraz raportowanie zrealizowanych zadań.",
                    "en" => "Documenting work results and reporting completed tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_MYJĄCY_CZĘŚCI_I_ZESPOŁY = [
            [
                "id" => 28790,
                "name" => json_encode([
                    "pl" => "Mycie części maszyn i urządzeń, w tym usuwanie zanieczyszczeń, olejów i smarów.",
                    "en" => "Washing machine parts and equipment, including removing contaminants, oils, and greases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28791,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w miejscu pracy oraz dbanie o higienę maszyn i narzędzi.",
                    "en" => "Maintaining cleanliness at the worksite and ensuring hygiene of machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28792,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do mycia części i zespołów, takich jak myjki ciśnieniowe, automatyczne linie myjące.",
                    "en" => "Operating equipment for washing parts and assemblies, such as pressure washers, automated washing lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28793,
                "name" => json_encode([
                    "pl" => "Kontrola jakości czyszczonych części, upewniając się, że są one odpowiednio przygotowane do dalszego montażu.",
                    "en" => "Controlling the quality of cleaned parts, ensuring they are properly prepared for further assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28794,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu myjącego, zapewniając jego sprawność operacyjną.",
                    "en" => "Repairing and maintaining cleaning equipment, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28795,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników mycia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting washing results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SORTOWACZ = [
            [
                "id" => 28796,
                "name" => json_encode([
                    "pl" => "Sortowanie materiałów, produktów lub odpadów zgodnie z określonymi kategoriami, takimi jak wielkość, kolor, typ.",
                    "en" => "Sorting materials, products, or waste according to specific categories, such as size, color, or type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28797,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do sortowania, takich jak taśmy transportowe, maszyny sortujące.",
                    "en" => "Operating sorting equipment, such as conveyor belts, sorting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28798,
                "name" => json_encode([
                    "pl" => "Kontrola jakości sortowanych materiałów, upewniając się, że spełniają wymagania jakościowe.",
                    "en" => "Controlling the quality of sorted materials, ensuring they meet quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28799,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sortowania, w celu zwiększenia efektywności i dokładności.",
                    "en" => "Optimizing the sorting process to increase efficiency and accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28800,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wykorzystywanych do sortowania.",
                    "en" => "Repairing and maintaining sorting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28801,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu sortowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the sorting process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYDAWCA_MATERIAŁÓW = [
            [
                "id" => 28802,
                "name" => json_encode([
                    "pl" => "Wydawanie materiałów do produkcji lub innych działów, zgodnie z zapotrzebowaniem i dokumentacją magazynową.",
                    "en" => "Issuing materials for production or other departments according to demand and warehouse documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28803,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydawanych materiałów, upewniając się, że spełniają one wymagania jakościowe.",
                    "en" => "Controlling the quality of materials issued, ensuring they meet quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28804,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wydawania materiałów, dbając o sprawną obsługę zamówień.",
                    "en" => "Managing the material issuing process, ensuring efficient order fulfillment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28805,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu wykorzystywanego do wydawania materiałów.",
                    "en" => "Repairing and maintaining equipment used for issuing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28806,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wydawania materiałów, aby zwiększyć efektywność i dokładność.",
                    "en" => "Optimizing the material issuing process to increase efficiency and accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28807,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wydawanych materiałów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting issued materials and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_PRZEMYŚLE = [
            [
                "id" => 28808,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych w przemyśle, takich jak montaż, pakowanie, transport materiałów.",
                    "en" => "Performing simple auxiliary tasks in the industry, such as assembly, packing, and material transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28809,
                "name" => json_encode([
                    "pl" => "Pomoc przy obsłudze maszyn przemysłowych, w tym załadunek materiałów, wymiana części eksploatacyjnych.",
                    "en" => "Assisting with industrial machine operation, including loading materials, replacing worn-out parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28810,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji, monitorowanie jakości materiałów i produktów.",
                    "en" => "Managing the production process, monitoring the quality of materials and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28811,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbanie o czystość stanowisk roboczych.",
                    "en" => "Maintaining cleanliness at the workplace, ensuring cleanliness at workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28812,
                "name" => json_encode([
                    "pl" => "Pomoc w załadunku, rozładunku, sortowaniu materiałów i półproduktów.",
                    "en" => "Assisting with loading, unloading, and sorting materials and semi-finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28813,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie wyników.",
                    "en" => "Documenting completed tasks and reporting on outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROWADZĄCY_POJAZDY_NAPĘDZANE_SIŁĄ_MIĘŚNI = [
            [
                "id" => 28814,
                "name" => json_encode([
                    "pl" => "Prowadzenie pojazdów napędzanych siłą mięśni, takich jak rowery, wózki ręczne czy sanie.",
                    "en" => "Operating vehicles powered by muscle power, such as bicycles, handcarts, or sleds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28815,
                "name" => json_encode([
                    "pl" => "Transportowanie towarów przy użyciu pojazdów napędzanych siłą mięśni, w tym przeprowadzanie rozładunku.",
                    "en" => "Transporting goods using muscle-powered vehicles, including unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28816,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego pojazdów napędzanych siłą mięśni, dbanie o ich sprawność.",
                    "en" => "Controlling the technical condition of muscle-powered vehicles, ensuring their operability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28817,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i organizacji podczas transportu towarów, zapewniając bezpieczeństwo w transporcie.",
                    "en" => "Maintaining order and organization during goods transport, ensuring safety during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28818,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku i rozładunku towarów przy użyciu pojazdów napędzanych siłą mięśni.",
                    "en" => "Assisting with loading and unloading goods using muscle-powered vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28819,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych transportów i raportowanie wyników.",
                    "en" => "Documenting completed transports and reporting on outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DOROŻKARZ = [
            [
                "id" => 28820,
                "name" => json_encode([
                    "pl" => "Prowadzenie dorożki, przewożenie pasażerów w wyznaczone miejsca zgodnie z ich życzeniem.",
                    "en" => "Driving a carriage, transporting passengers to designated places according to their wishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28821,
                "name" => json_encode([
                    "pl" => "Zarządzanie swoim pojazdem, dbając o jego stan techniczny, czystość oraz odpowiednie wyposażenie.",
                    "en" => "Managing the vehicle, ensuring its technical condition, cleanliness, and proper equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28822,
                "name" => json_encode([
                    "pl" => "Kontrola pasażerów, zapewniając ich bezpieczeństwo i komfort podczas podróży.",
                    "en" => "Controlling passengers, ensuring their safety and comfort during the trip."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28823,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozkładem jazdy dorożki oraz reagowanie na zapotrzebowanie pasażerów.",
                    "en" => "Managing the carriage schedule and responding to passengers' requests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28824,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja dorożki oraz dbanie o jej estetykę.",
                    "en" => "Repairing and maintaining the carriage and ensuring its aesthetic appearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28825,
                "name" => json_encode([
                    "pl" => "Monitorowanie i reagowanie na potrzeby pasażerów, w tym w przypadku ewentualnych problemów.",
                    "en" => "Monitoring and responding to passengers' needs, including addressing any issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WOZAK = [
            [
                "id" => 28826,
                "name" => json_encode([
                    "pl" => "Prowadzenie pojazdów zaprzęgowych, takich jak wozy i furmanki, w celu transportu towarów lub pasażerów.",
                    "en" => "Driving draft vehicles, such as wagons and carts, for transporting goods or passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28827,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów przy użyciu wozu, kontrolowanie masy i równomiernego rozkładu ładunku.",
                    "en" => "Loading and unloading goods using a cart, controlling weight and even distribution of the load."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28828,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny pojazdu, naprawa drobnych usterek oraz konserwacja wozu.",
                    "en" => "Taking care of the vehicle's technical condition, repairing minor faults, and maintaining the cart."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28829,
                "name" => json_encode([
                    "pl" => "Kontrola i zapewnienie bezpieczeństwa przewożonych towarów lub pasażerów.",
                    "en" => "Controlling and ensuring the safety of transported goods or passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28830,
                "name" => json_encode([
                    "pl" => "Optymalizacja tras przewozowych, dbając o efektywność i terminowość dostaw.",
                    "en" => "Optimizing transport routes, ensuring efficiency and timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28831,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów drogowych i zapewnienie bezpieczeństwa w trakcie jazdy.",
                    "en" => "Adhering to traffic regulations and ensuring safety during the ride."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DŹWIGOWY_WINDZIARZ = [
            [
                "id" => 28832,
                "name" => json_encode([
                    "pl" => "Obsługa dźwigów, wind i innych urządzeń do transportu osób i towarów w budynkach.",
                    "en" => "Operating elevators, lifts, and other devices for transporting people and goods within buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28833,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego wind i dźwigów, zapewniając ich sprawność i bezpieczeństwo.",
                    "en" => "Controlling the technical condition of elevators and lifts, ensuring their functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28834,
                "name" => json_encode([
                    "pl" => "Pomoc pasażerom w korzystaniu z windy, zapewniając ich komfort i bezpieczeństwo.",
                    "en" => "Assisting passengers in using the elevator, ensuring their comfort and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28835,
                "name" => json_encode([
                    "pl" => "Zarządzanie rozkładem pracy dźwigów, zapewniając ich dostępność i sprawną obsługę.",
                    "en" => "Managing the scheduling of elevator usage, ensuring availability and smooth operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28836,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń dźwigowych, dbając o ich stan techniczny.",
                    "en" => "Repairing and maintaining lifting devices, ensuring their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28837,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników kontroli i konserwacji urządzeń dźwigowych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting inspection and maintenance results of lifting devices and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOLPORTER = [
            [
                "id" => 28838,
                "name" => json_encode([
                    "pl" => "Roznoszenie gazet, czasopism, ulotek i innych materiałów drukowanych do określonych miejsc.",
                    "en" => "Distributing newspapers, magazines, flyers, and other printed materials to designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28839,
                "name" => json_encode([
                    "pl" => "Kontrola ilości rozprowadzanych materiałów oraz ich poprawność w stosunku do zamówień.",
                    "en" => "Controlling the quantity of distributed materials and ensuring they match the orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28840,
                "name" => json_encode([
                    "pl" => "Organizowanie tras kolportażu, dbając o terminowe dostarczenie materiałów.",
                    "en" => "Organizing distribution routes, ensuring timely delivery of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28841,
                "name" => json_encode([
                    "pl" => "Zarządzanie i monitorowanie działań związanych z kolportażem materiałów promocyjnych.",
                    "en" => "Managing and monitoring activities related to distributing promotional materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28842,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi wykorzystywanych do kolportażu, takich jak torby, wózki.",
                    "en" => "Repairing and maintaining tools used for distribution, such as bags and carts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28843,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników kolportażu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting distribution results and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NOSZOWY = [
            [
                "id" => 28844,
                "name" => json_encode([
                    "pl" => "Przewożenie osób chorych, rannych lub niepełnosprawnych do odpowiednich placówek medycznych.",
                    "en" => "Transporting sick, injured, or disabled people to appropriate medical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28845,
                "name" => json_encode([
                    "pl" => "Pomoc w przenoszeniu pacjentów z łóżek do innych części szpitala lub placówki medycznej.",
                    "en" => "Assisting with transferring patients from beds to other areas of the hospital or medical facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28846,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem pacjentów w szpitalu lub klinice, zapewniając ich bezpieczeństwo i komfort.",
                    "en" => "Managing patient transport in the hospital or clinic, ensuring their safety and comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28847,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu pacjentów do transportu, w tym ich odpowiednie umieszczenie na noszach.",
                    "en" => "Assisting in preparing patients for transport, including positioning them properly on stretchers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28848,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w przestrzeni transportu pacjentów, dbając o bezpieczeństwo zarówno pacjentów, jak i personelu.",
                    "en" => "Maintaining order in the patient transport area, ensuring safety for both patients and staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28849,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych transportów i raportowanie wyników.",
                    "en" => "Documenting completed transports and reporting outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_GOŃCY_BAGAŻOWI_I_POKREWNI = [
            [
                "id" => 28850,
                "name" => json_encode([
                    "pl" => "Przewożenie bagażu pasażerów w portach, dworcach, hotelach i innych miejscach publicznych.",
                    "en" => "Transporting passengers' luggage at ports, train stations, hotels, and other public places."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28851,
                "name" => json_encode([
                    "pl" => "Pomoc pasażerom w przenoszeniu bagaży, organizowanie transportu bagażu do odpowiednich miejsc.",
                    "en" => "Assisting passengers with luggage handling and organizing its transport to designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28852,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem bagażu w obiektach publicznych, dbając o porządek i bezpieczeństwo.",
                    "en" => "Managing luggage transport in public facilities, ensuring order and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28853,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi wykorzystywanych do transportu bagaży, takich jak wózki bagażowe.",
                    "en" => "Repairing and maintaining tools used for luggage transport, such as luggage carts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28854,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów transportu bagaży w celu zwiększenia efektywności pracy.",
                    "en" => "Optimizing luggage transport processes to increase work efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28855,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników transportu bagaży i raportowanie wyników jakościowych.",
                    "en" => "Documenting luggage transport results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ODCZYTYWACZ_LICZNIKÓW = [
            [
                "id" => 28856,
                "name" => json_encode([
                    "pl" => "Odczytywanie stanu liczników wodomierzy, gazomierzy, liczników energii elektrycznej i innych urządzeń pomiarowych.",
                    "en" => "Reading the readings of water meters, gas meters, electricity meters, and other measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28857,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników odczytów liczników i raportowanie ich do odpowiednich działów.",
                    "en" => "Documenting the meter readings and reporting them to the relevant departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28858,
                "name" => json_encode([
                    "pl" => "Kontrola prawidłowości działania liczników oraz zgłaszanie uszkodzeń lub nieprawidłowości.",
                    "en" => "Controlling the proper functioning of meters and reporting damages or irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28859,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku przy licznikach, dbanie o ich czystość i dostępność.",
                    "en" => "Maintaining order around meters, ensuring cleanliness and accessibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28860,
                "name" => json_encode([
                    "pl" => "Wykonywanie innych zadań związanych z odczytem liczników, takich jak zbieranie danych do analizy.",
                    "en" => "Performing other tasks related to meter reading, such as collecting data for analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28861,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego liczników, zgłaszanie konieczności kalibracji lub wymiany.",
                    "en" => "Controlling the technical condition of meters, reporting the need for calibration or replacement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYBIERACZ_MONET_Z_AUTOMATÓW = [
            [
                "id" => 28862,
                "name" => json_encode([
                    "pl" => "Wybieranie monet lub żetonów z automatów, takich jak automaty do gier, automaty biletowe czy maszyny vendingowe.",
                    "en" => "Collecting coins or tokens from machines, such as gaming machines, ticket machines, or vending machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28863,
                "name" => json_encode([
                    "pl" => "Liczenie i segregowanie zebranego materiału, w tym sprawdzanie stanu monet i żetonów.",
                    "en" => "Counting and sorting the collected materials, including checking the condition of coins and tokens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28864,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w obrębie maszyn i urządzeń, w tym wyjmowanie monet lub żetonów w sposób bezpieczny.",
                    "en" => "Maintaining cleanliness around machines and equipment, including safely removing coins or tokens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28865,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do zbierania monet i żetonów, w tym usuwanie zatorów.",
                    "en" => "Repairing and maintaining equipment for collecting coins and tokens, including removing blockages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28866,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy automatów i dbanie o ich prawidłowe funkcjonowanie.",
                    "en" => "Monitoring the operation of machines and ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28867,
                "name" => json_encode([
                    "pl" => "Dokumentowanie zebranych monet i żetonów, raportowanie wyników oraz przygotowywanie ich do dalszej obróbki.",
                    "en" => "Documenting collected coins and tokens, reporting the results, and preparing them for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_KRAWCA = [
            [
                "id" => 28868,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu materiałów krawieckich, takich jak cięcie tkanin, przygotowanie nici, guzików.",
                    "en" => "Assisting in preparing sewing materials, such as cutting fabrics, preparing threads, buttons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28869,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac krawieckich, takich jak zszywanie elementów odzieży lub materiałów.",
                    "en" => "Performing simple sewing tasks, such as stitching parts of clothing or materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28870,
                "name" => json_encode([
                    "pl" => "Przygotowanie i układanie materiałów do krojenia, a także pomoc w montażu odzieży.",
                    "en" => "Preparing and arranging fabrics for cutting, as well as assisting in garment assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28871,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawach odzieży, w tym przyszywanie guzików, naprawianie drobnych uszkodzeń.",
                    "en" => "Assisting in garment repairs, including sewing buttons, fixing small damages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28872,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w warsztacie krawieckim, dbanie o czystość i organizację materiałów.",
                    "en" => "Maintaining cleanliness in the sewing workshop, ensuring cleanliness and organizing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28873,
                "name" => json_encode([
                    "pl" => "Dokumentowanie zleceń krawieckich oraz raportowanie postępów w realizacji.",
                    "en" => "Documenting sewing orders and reporting progress on their completion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_MECHANIKA = [
            [
                "id" => 28874,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawach i konserwacji maszyn, takich jak wymiana części, smarowanie i czyszczenie.",
                    "en" => "Assisting in machine repairs and maintenance, such as part replacement, lubrication, and cleaning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28875,
                "name" => json_encode([
                    "pl" => "Przygotowanie narzędzi i materiałów do pracy mechanika, w tym kontrola stanu technicznego urządzeń.",
                    "en" => "Preparing tools and materials for mechanic's work, including checking the technical condition of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28876,
                "name" => json_encode([
                    "pl" => "Wspieranie mechanika przy naprawach, w tym pomoc przy demontażu i montażu części maszyn.",
                    "en" => "Supporting the mechanic in repairs, including assisting in the disassembly and assembly of machine parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28877,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych napraw maszyn, takich jak wymiana uszkodzonych części.",
                    "en" => "Performing simple machine repairs, such as replacing damaged parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28878,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w warsztacie mechanicznym, dbanie o czystość maszyn i narzędzi.",
                    "en" => "Maintaining cleanliness in the mechanic's workshop, ensuring cleanliness of machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28879,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych prac mechanicznych oraz raportowanie wyników.",
                    "en" => "Documenting mechanical work carried out and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_ŚLUSARZA = [
            [
                "id" => 28880,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawach i konserwacji urządzeń ślusarskich, takich jak zamki, zawiasy, narzędzia.",
                    "en" => "Assisting in repairs and maintenance of locksmith tools and equipment, such as locks, hinges, and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28881,
                "name" => json_encode([
                    "pl" => "Przygotowanie narzędzi ślusarskich oraz materiałów do pracy, w tym cięcie i gięcie metali.",
                    "en" => "Preparing locksmith tools and materials for work, including cutting and bending metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28882,
                "name" => json_encode([
                    "pl" => "Pomoc w obróbce i montażu elementów metalowych, takich jak zamki, klamki, zawiasy.",
                    "en" => "Assisting in the processing and assembly of metal components such as locks, handles, and hinges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28883,
                "name" => json_encode([
                    "pl" => "Naprawa drobnych uszkodzeń narzędzi i urządzeń ślusarskich.",
                    "en" => "Repairing minor damages to locksmith tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28884,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w warsztacie ślusarskim, dbanie o czystość i organizację narzędzi.",
                    "en" => "Maintaining cleanliness in the locksmith's workshop, ensuring cleanliness and organization of tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28885,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac ślusarskich oraz raportowanie wyników.",
                    "en" => "Documenting completed locksmith work and reporting on results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_STOLARZA = [
            [
                "id" => 28886,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu materiałów stolarskich, takich jak cięcie drewna, przygotowanie narzędzi.",
                    "en" => "Assisting in preparing woodworking materials, such as cutting wood, preparing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28887,
                "name" => json_encode([
                    "pl" => "Pomoc w montażu wyrobów stolarskich, takich jak meble, drzwi, okna.",
                    "en" => "Assisting in assembling woodworking products such as furniture, doors, windows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28888,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w warsztacie stolarskim, dbanie o czystość narzędzi i materiałów.",
                    "en" => "Maintaining cleanliness in the woodworking shop, ensuring cleanliness of tools and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28889,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawach i konserwacji wyrobów stolarskich, takich jak naprawa uszkodzonych mebli.",
                    "en" => "Assisting in repairs and maintenance of woodworking products, such as fixing damaged furniture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28890,
                "name" => json_encode([
                    "pl" => "Przygotowanie narzędzi i maszyn do pracy, dbanie o ich prawidłowe działanie.",
                    "en" => "Preparing tools and machines for work, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28891,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie postępu pracy.",
                    "en" => "Documenting completed tasks and reporting work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_FRYZJERA = [
            [
                "id" => 28892,
                "name" => json_encode([
                    "pl" => "Pomoc fryzjerowi w przygotowaniu stanowiska pracy, takich jak układanie narzędzi, materiałów.",
                    "en" => "Assisting the hairdresser in preparing the workstation, such as arranging tools and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28893,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych usług fryzjerskich, takich jak mycie i suszenie włosów.",
                    "en" => "Performing simple hairdressing tasks, such as washing and drying hair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28894,
                "name" => json_encode([
                    "pl" => "Przygotowanie i dobór kosmetyków do zabiegów fryzjerskich.",
                    "en" => "Preparing and selecting cosmetics for hairdressing treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28895,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu czystości stanowiska pracy, dbanie o porządek narzędzi fryzjerskich.",
                    "en" => "Assisting in maintaining the cleanliness of the workstation, ensuring order of hairdressing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28896,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami kosmetyków i narzędzi fryzjerskich.",
                    "en" => "Managing supplies of cosmetics and hairdressing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28897,
                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze klientów, zapewniając ich komfort podczas wizyty.",
                    "en" => "Assisting with customer service, ensuring their comfort during the visit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ZNAKÓW_NAWIGACYJNYCH = [
            [
                "id" => 28898,
                "name" => json_encode([
                    "pl" => "Montaż znaków nawigacyjnych, takich jak znaki drogowe, sygnalizatory świetlne, tablice informacyjne.",
                    "en" => "Installing navigation signs, such as traffic signs, traffic lights, informational boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28899,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zainstalowanych znaków oraz zapewnienie ich widoczności i czytelności.",
                    "en" => "Controlling the quality of installed signs, ensuring their visibility and readability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28900,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu materiałów do produkcji znaków, takich jak cięcie i formowanie metali, tworzyw sztucznych.",
                    "en" => "Assisting in preparing materials for sign production, such as cutting and shaping metals and plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28901,
                "name" => json_encode([
                    "pl" => "Przygotowanie terenu do montażu znaków, w tym wykopywanie dołów, instalowanie fundamentów.",
                    "en" => "Preparing the site for sign installation, including digging holes, installing foundations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28902,
                "name" => json_encode([
                    "pl" => "Pomoc w konserwacji i naprawach istniejących znaków nawigacyjnych.",
                    "en" => "Assisting in the maintenance and repairs of existing navigation signs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28903,
                "name" => json_encode([
                    "pl" => "Dokumentowanie zainstalowanych znaków oraz ich lokalizacji, raportowanie postępu prac.",
                    "en" => "Documenting installed signs and their locations, reporting on work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_PRZEMYSŁOWI_I_RZEMIEŚLNICY_GDZIE_INDZIJES_NIESKLASYFIKOWANI = [
            [
                "id" => 28904,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnorodnych prac przemysłowych i rzemieślniczych w zależności od zapotrzebowania, takich jak produkcja, naprawy, montaż.",
                    "en" => "Performing various industrial and craft tasks based on demand, such as production, repairs, and assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28905,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbanie o czystość stanowisk roboczych.",
                    "en" => "Maintaining cleanliness in the workplace, ensuring cleanliness of workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28906,
                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze maszyn i urządzeń, kontrola jakości produkcji.",
                    "en" => "Assisting in operating machines and equipment, controlling production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28907,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku i rozładunku towarów, transportowanie materiałów do odpowiednich stanowisk.",
                    "en" => "Assisting with loading and unloading goods, transporting materials to appropriate stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28908,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi i maszyn wykorzystywanych w produkcji.",
                    "en" => "Repairing and maintaining tools and machines used in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28909,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie wyników pracy.",
                    "en" => "Documenting completed tasks and reporting on work results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_FRYZJERA = [
            [
                "id" => 28910,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowaniu stanowiska pracy, układaniu narzędzi fryzjerskich i kosmetyków.",
                    "en" => "Assisting in preparing the workstation, arranging hairdressing tools and cosmetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28911,
                "name" => json_encode([
                    "pl" => "Przygotowanie klientów do zabiegów fryzjerskich, w tym mycie włosów, przygotowanie odpowiednich kosmetyków.",
                    "en" => "Preparing clients for hairdressing treatments, including washing hair and preparing appropriate cosmetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28912,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbanie o czystość narzędzi i materiałów fryzjerskich.",
                    "en" => "Maintaining cleanliness in the workplace, ensuring the cleanliness of hairdressing tools and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28913,
                "name" => json_encode([
                    "pl" => "Pomoc przy strzyżeniu i stylizacji włosów, w tym prostowanie i suszenie.",
                    "en" => "Assisting with cutting and styling hair, including straightening and drying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28914,
                "name" => json_encode([
                    "pl" => "Przygotowanie i dbanie o zapasy kosmetyków fryzjerskich, takich jak szampony, odżywki, farby.",
                    "en" => "Preparing and managing hairdressing cosmetic supplies, such as shampoos, conditioners, and dyes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28915,
                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze klientów i dbanie o ich komfort podczas wizyty.",
                    "en" => "Assisting with customer service and ensuring their comfort during the visit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNIK_ELEKTROMONTERA = [
            [
                "id" => 28916,
                "name" => json_encode([
                    "pl" => "Pomoc w montażu instalacji elektrycznych, w tym układanie kabli, podłączanie urządzeń elektrycznych.",
                    "en" => "Assisting in the installation of electrical systems, including laying cables and connecting electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28917,
                "name" => json_encode([
                    "pl" => "Wspieranie elektromontera w konserwacji instalacji elektrycznych, kontrolowanie stanu technicznego urządzeń.",
                    "en" => "Supporting the electrical fitter in maintaining electrical systems, checking the technical condition of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28918,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawie uszkodzeń instalacji elektrycznych, wymiana uszkodzonych kabli i urządzeń.",
                    "en" => "Assisting in repairing electrical systems, replacing damaged cables and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28919,
                "name" => json_encode([
                    "pl" => "Przygotowanie narzędzi i materiałów do pracy, takich jak kable, złączki, narzędzia elektryczne.",
                    "en" => "Preparing tools and materials for work, such as cables, connectors, electrical tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28920,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek w miejscu pracy, zapewnianie bezpieczeństwa przy pracy z instalacjami elektrycznymi.",
                    "en" => "Maintaining cleanliness in the workplace, ensuring safety when working with electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 28921,
                "name" => json_encode([
                    "pl" => "Pomoc w przeprowadzaniu testów urządzeń elektrycznych, sprawdzanie ich działania przed oddaniem do użytku.",
                    "en" => "Assisting in testing electrical devices, checking their operation before commissioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $OPERATOR_AUTOMATÓW_CEGLARSKICH_I_WAPIENNO_PIASKARSKICH,
            $HARTOWACZ_BETONÓW_I_SYLIKATÓW,
            $KRAJACZ_MATERIAŁÓW_BUDOWLANYCH,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_BLOKÓW_I_TYNKÓW_GIPSOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ELEMENTÓW_Z_BETONU_KOMÓRKOWEGO,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_ASFALTOBETONOWYCH,
            $OPERATOR_URZĄDZEŃ_WYTWÓRCZYCH_MIESZANEK_BETONOWYCH,
            $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CEMENTOWYCH_KAMIENNYCH_I_POKREWNYCH,
            $APARATOWY_PROCESÓW_CHEMICZNYCH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_PAPY,
            $OPERATOR_MASZYN_DO_PRODUKCJI_TAŚM_MAGNETYCZNYCH,
            $OPERATOR_MASZYN_ZAPAŁCZANYCH,
            $OPERATOR_REAKTORÓW_I_AUTOKLAWÓW,
            $OPERATOR_URZĄDZEŃ_DESTYLACYJNYCH,
            $OPERATOR_URZĄDZEŃ_DO_EKSTRAKCJI,
            $OPERATOR_URZĄDZEŃ_DO_KRYSTALIZACJI,
            $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_CIEPLNEJ_CHEMIKALIÓW,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CEMENTU,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_NIEORGANICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_ORGANICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_DEZYNFEKTANTÓW,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_GAZÓW_TECZNNICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KATALIZATORÓW,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_BITUMICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_PÓŁPRZEWODNIKOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_WYBUCHOWYCH_I_POKREWNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAWOZÓW_SZTUCZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_OŁÓWKÓW,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SADZY,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SZTUCZNEJ_SKÓRY,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ŚRODKÓW_PIORĄCYCH_I_MYJĄCYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WĘGLI_AKTYWNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WŁÓKIEN_CHEMICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_FARMACEUTYCZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_KOSMETYCZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU,
            $OPERATOR_URZĄDZEŃ_FILTRUJĄCYCH,
            $OPERATOR_URZĄDZEŃ_GRANULUJĄCYCH,
            $OPERATOR_URZĄDZEŃ_HOMOGENIZUJĄCYCH,
            $OPERATOR_URZĄDZEŃ_KOKSOWNICZYCH,
            $OPERATOR_URZĄDZEŃ_MIESZAJĄCYCH,
            $OPERATOR_URZĄDZEŃ_ROZDRABNIAJĄCECH,
            $OPERATOR_URZĄDZEŃ_SORPCYJNYCH,
            $OPERATOR_URZĄDZEŃ_WYPARENYCH,
            $OPERATOR_WIRÓWEK,
            $STOKAŻOWY,
            $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CHEMICZNYCH,
            $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CHEMICZNEGO,
            $OPERATOR_MINILABU_FOTOGRAFICZNEGO,
            $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_BŁON_I_FILMÓW_FOTOGRAFICZNYCH,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚWIATŁOCZUŁYCH_I_OBRÓBKI_FILMÓW,
            $APARATOWY_PRODUKCJI_WYROBÓW_MACZANYCH,
            $OPERATOR_URZĄDZEŃ_DO_WULKANIZACJI,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_SUROWCÓW_GUMOWYCH,
            $WULKANIZATOR,
            $WULKANIZATOR_TAŚM_PRZENOSNIKOWYCH,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_GUMOWYCH,
            $FORMIERZ_WYROBÓW_Z_KOMPOZYTÓW_POLIMEROWYCH,
            $FORMOWACZ_ORTOPEDYCZNYCH_WYROBÓW_Z_TWORZYW,
            $ODLEWNIK_WYROBÓW_Z_MATERIAŁÓW_POLIMEROWYCH,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OKIEN_Z_TWORZYW_SZTUCZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_CIĘCIA_FOLII_I_PŁYT,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_Z_TWORZYW_SZTUCZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_SPIENIANIA_TWORZYW_SZTUCZNYCH,
            $OPERATOR_WTRYSKARKI,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH,
            $OPERATOR_KALANDRÓW_WYROBÓW_PAPIEROWYCH,
            $OPERATOR_LINII_DO_BELOWANIA_MAKULATURY,
            $OPERATOR_MASZYNY_ODWADNIAJĄCEJ_CELOZĘ,
            $OPERATOR_MASZYNY_PAPIERNICZEJ,
            $OPERATOR_MASZYNY_TEKTURNICZEJ,
            $OPERATOR_PERGAMINIARKI,
            $OPERATOR_URZĄDZEŃ_BIELĄCYCH_MASY_WŁÓKNISTE,
            $OPERATOR_URZĄDZEŃ_DO_IMPREGNOWANIA_I_POWLEKANIA_WYROBÓW_PAPIEROWYCH,
            $OPERATOR_URZĄDZEŃ_DO_MIELENIA_MASY_WŁÓKNISTEJ,
            $OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWYWANIA_I_DOZOWANIA_DODATKÓW_MASOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_SCIERANIA_DREWNA,
            $OPERATOR_URZĄDZEŃ_RĘBALNI_DREWNA,
            $OPERATOR_URZĄDZEŃ_ROZWŁÓKNIENIA,
            $OPERATOR_URZĄDZEŃ_WARZELNI,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_WYROBU_MASY_PAPIERNICZEJ_I_PRODUKCJI_PAPIERU,
            $OPERATOR_MASZYN_DO_LAKIEROWANIA_I_LAMINOWANIA_PRZETWORÓW_PAPIEROWYCH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_OPAKOWAŃ_Z_PAPIERU_I_TEKTURY,
            $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_PIŚMIENNYCH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_TOALETOWYCH_I_SANITARNYCH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_PAPIERU_I_TEKTURY_FALISTEJ,
            $OPERATOR_MASZYN_DO_PRODUKCJI_SZNURKA_I_TULEI,
            $OPERATOR_MASZYN_KROJĄCEJ_I_WYKRAWIAJĄCEJ_DO_PAPIERU,
            $OPERATOR_PRAS_DO_FORMOWANIA_WYROBÓW_Z_MASY_PAPIERNICZEJ,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH,
            $DZIEWIARZ,
            $PRZĘDZARZ,
            $TKACZ,
            $OPERATOR_MASZYN_DO_PRZYGOTOWANIA_WŁÓKIEN,
            $OPERATOR_MASZYN_PRZĘDZALNICZYCH,
            $OPERATOR_PRZEWIJAREK_I_SKRĘCAREK_NITEK,
            $POZOSTALI_OPERATORZY_MASZYN_PRZĘDZALNICZYCH_I_POKREWNI,
            $OPERATOR_MASZYN_DZIEWIARSKICH,
            $OPERATOR_MASZYN_PRZYGOTOWAWCZYCH_DO_WYTWARZANIA_PŁASKICH_WYROBÓW_WŁÓKIENNICZYCH,
            $OPERATOR_MASZYN_TKACKICH,
            $OPERATOR_MASZYN_W_PRZEMYŚLE_WŁÓKIENNICZYM_S,
            $POZOSTALI_OPERATORZY_MASZYN_TKACKICH_I_DZIEWIARSKICH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_WŁÓKNIN_I_PRZĘDZIN,
            $LAKIERNIK_PROSZKOWY,
            $LAKIERNIK_TWORZYW_SZTUCZNYCH,
            $LAKIERNIK_WYROBÓW_DRZEWNYCH,
            $MALARZ_LAKIERNIK_SAMOLOTOWY,
            $MALARZ_LAKIERNIK_KONSTRUKCJI_I_WYROBÓW_METALOWYCH,
            $PIASKARZ,
            $POZOSTALI_LAKIERNICY,
            $POMOCNIK_LAKIERNIKA,
            $LUTOWACZ,
            $OPERATOR_ROBOTÓW_SPAWALNICZYCH,
            $OPERATOR_ZGRZEWAREK,
            $SPAWACZ,
            $ZGRZEWACZ,
            $POZOSTALI_SPAWACZE_I_POKREWNI,
            $TECHNIK_SPAWALNICTWA,
            $EGUTERYSTA,
            $PLATNERZ,
            $RUSZNIKARZ,
            $ŚLUSARZ,
            $ŚLUSARZ_GALANTERII_METALOWEJ,
            $ŚLUSARZ_NARZĘDZIOWY,
            $TRASER,
            $POZOSTALI_ŚLUSARZE_I_POKREWNI,
            $FREZER,
            $OPERATOR_AUTOMATYCZNEJ_LINII_OBRÓBKI_SKRAWANIEM,
            $OPERATOR_MASZYN_DO_OBRÓBKI_SKRAWANIEM,
            $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_DRUTU_LIN_SIATEK_I_KABLI,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_ŁOŻYSK_TOCZNYCH,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OPAKOWAŃ_BLASZANYCH,
            $OPERATOR_OBRABIAREK_STEROWANYCH_NUMERYCZNIE,
            $OPERATOR_OBRABIAREK_ZESPOŁOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_WYWAŻANIA_I_CENTROWANIA,
            $STRUGACZ,
            $SZLIFIERZ_METALI,
            $TOKARZ_FREZER_OBRABIAREK_STEROWANYCH_NUMERYCZNIE,
            $TOKARZ_W_METALU,
            $USTAWIACZ_MASZYN_DO_OBRÓBKI_SKRAWANIEM,
            $WIERTECZ_W_METALU,
            $POZOSTALI_USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI,
            $OPERATOR_OBRABIAREK_SKRAWIAJĄCYCH,
            $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_METALU,
            $DOCIERACZ_POLEROWACZ,
            $SZLIFIERZ_OSTRZARZ,
            $POZOSTALI_SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI,
            $PAKOWACZ_RĘCZNY,
            $RĘCZNY_ZNAKOWACZ_WYROBÓW,
            $ŁADOWACZ,
            $NAPEŁNIAJĄCY_ZBIORNIKI_PRZENOŚNE,
            $PRACOWNIK_PRZEPUSTKOWY,
            $ROBOTNIK_MAGAZYNOWY,
            $ROBOTNIK_PRACUJĄCY_NA_RAMPIE,
            $SZTAUER_TRYMER,
            $TRAGARZ,
            $WAGOWY,
            $POZOSTALI_ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW,
            $ŁADOWACZ_NIECZYSTOŚCI_PŁYNNYCH,
            $ŁADOWACZ_NIECZYSTOŚCI_STAŁYCH,
            $PRACOWNIK_ZBIÓRKI_ODPADÓW,
            $POZOSTALI_ŁADOWACZE_NIECZYSTOŚCI,
            $ROBOTNIK_OCZYSZCZANIA_MIASTA,
            $ROBOTNIK_PLACOWY,
            $ZAMIATACZ,
            $POZOSTALI_ZAMIAATACZE_I_POKREWNI,
            $PRACOWNIK_PRAC_DORYWCZYCH,
            $STATYSTA,
            $POZOSTALI_PRACOWNICY_WYKONUJĄCY_DORYWCZE_PRACE_PROSTE,
            $OPERATOR_MASZYN_KOPERTUJĄCYCH,
            $OPERATOR_URZĄDZEŃ_DO_MYCIA_NAPEŁNIANIA_I_ZAMYKANIA_BUTELEK,
            $OPERATOR_URZĄDZEŃ_PAKUJĄCYCH,
            $OPERATOR_URZĄDZEŃ_ZNAKUJĄCYCH,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_PAKUJĄCYCH_ZNAKUJĄCYCH_I_URZĄDZEŃ_DO_NAPEŁNIANIA_BUTELEK,
            $OPERATOR_URZĄDZEŃ_DO_PALETYZACJI,
            $OPERATOR_URZĄDZEŃ_UTYLIZACJI_SUROWCÓW_ZWIERZĘCYCH,
            $POZOSTALI_OPERATORZY_INNYCH_MASZYN_I_URZĄDZEŃ_PRZETWÓRCZYCH,
            $KONFEKCJONER_WYROBÓW_GUMOWYCH,
            $MONTER_WYROBÓW_TEKSTYLNYCH_Z_TEKTURY_I_POKREWNYCH_MATERIAŁÓW,
            $MONTER_WYROBÓW_Z_TWORZYW_SZTUCZNYCH,
            $SKŁADACZ_SPRZĘTU_SPADOCHRONOWEGO,
            $POZOSTALI_MONTERZY_GDZIE_INDZIJES_NIESKLASYFIKOWANI,
            $ZMYWACZ_GRAFFITI,
            $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_KOPALNIACH_I_KAMIENIOŁOMACH,
            $KOPACZ,
            $MELIORANT,
            $OCZYSZCZACZ_KANALIZACYJNY,
            $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_DROGOWYM_WODNYM_I_POKREWNI,
            $KONSERWATOR_CZĘŚCI_SPRZĘTU,
            $POMOCNICZY_ROBOTNIK_PRZEMYSŁOWY,
            $ROBOTNIK_MYJĄCY_CZĘŚCI_I_ZESPOŁY,
            $SORTOWACZ,
            $WYDAWCA_MATERIAŁÓW,
            $POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_PRZEMYŚLE,
            $PROWADZĄCY_POJAZDY_NAPĘDZANE_SIŁĄ_MIĘŚNI,
            $DOROŻKARZ,
            $WOZAK,
            $DŹWIGOWY_WINDZIARZ,
            $KOLPORTER,
            $NOSZOWY,
            $POZOSTALI_GOŃCY_BAGAŻOWI_I_POKREWNI,
            $ODCZYTYWACZ_LICZNIKÓW,
            $WYBIERACZ_MONET_Z_AUTOMATÓW,
            $PRACOWNIK_POMOCNICZY_KRAWCA,
            $PRACOWNIK_POMOCNICZY_MECHANIKA,
            $PRACOWNIK_POMOCNICZY_ŚLUSARZA,
            $PRACOWNIK_POMOCNICZY_STOLARZA,
            $ASYSTENT_FRYZJERA,
            $MONTER_ZNAKÓW_NAWIGACYJNYCH,
            $POZOSTALI_ROBOTNICY_PRZEMYSŁOWI_I_RZEMIEŚLNICY_GDZIE_INDZIJES_NIESKLASYFIKOWANI,
            $PRACOWNIK_POMOCNICZY_FRYZJERA,
            $POMOCNIK_ELEKTROMONTERA,
        ));

        Category::whereId('2317')->first()->detailprojects()->attach(collect($OPERATOR_AUTOMATÓW_CEGLARSKICH_I_WAPIENNO_PIASKARSKICH)->pluck('id')->toArray());
        Category::whereId('2318')->first()->detailprojects()->attach(collect($HARTOWACZ_BETONÓW_I_SYLIKATÓW)->pluck('id')->toArray());
        Category::whereId('2319')->first()->detailprojects()->attach(collect($KRAJACZ_MATERIAŁÓW_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('2320')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_BLOKÓW_I_TYNKÓW_GIPSOWYCH)->pluck('id')->toArray());
        Category::whereId('2321')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ELEMENTÓW_Z_BETONU_KOMÓRKOWEGO)->pluck('id')->toArray());
        Category::whereId('2322')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_ASFALTOBETONOWYCH)->pluck('id')->toArray());
        Category::whereId('2323')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WYTWÓRCZYCH_MIESZANEK_BETONOWYCH)->pluck('id')->toArray());
        Category::whereId('2324')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CEMENTOWYCH_KAMIENNYCH_I_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('2327')->first()->detailprojects()->attach(collect($APARATOWY_PROCESÓW_CHEMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2328')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_PAPY)->pluck('id')->toArray());
        Category::whereId('2329')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_TAŚM_MAGNETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('2330')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_ZAPAŁCZANYCH)->pluck('id')->toArray());
        Category::whereId('2331')->first()->detailprojects()->attach(collect($OPERATOR_REAKTORÓW_I_AUTOKLAWÓW)->pluck('id')->toArray());
        Category::whereId('2332')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DESTYLACYJNYCH)->pluck('id')->toArray());
        Category::whereId('2333')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_EKSTRAKCJI)->pluck('id')->toArray());
        Category::whereId('2334')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_KRYSTALIZACJI)->pluck('id')->toArray());
        Category::whereId('2335')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_CIEPLNEJ_CHEMIKALIÓW)->pluck('id')->toArray());
        Category::whereId('2336')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CEMENTU)->pluck('id')->toArray());
        Category::whereId('2337')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_NIEORGANICZNYCH)->pluck('id')->toArray());
        Category::whereId('2338')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CHEMIKALIÓW_ORGANICZNYCH)->pluck('id')->toArray());
        Category::whereId('2339')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_DEZYNFEKTANTÓW)->pluck('id')->toArray());
        Category::whereId('2340')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_GAZÓW_TECZNNICZNYCH)->pluck('id')->toArray());
        Category::whereId('2341')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KATALIZATORÓW)->pluck('id')->toArray());
        Category::whereId('2342')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAS_BITUMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2343')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_PÓŁPRZEWODNIKOWYCH)->pluck('id')->toArray());
        Category::whereId('2344')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_WYBUCHOWYCH_I_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('2345')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAWOZÓW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2346')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_OŁÓWKÓW)->pluck('id')->toArray());
        Category::whereId('2347')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SADZY)->pluck('id')->toArray());
        Category::whereId('2348')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SZTUCZNEJ_SKÓRY)->pluck('id')->toArray());
        Category::whereId('2349')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_ŚRODKÓW_PIORĄCYCH_I_MYJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2350')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WĘGLI_AKTYWNYCH)->pluck('id')->toArray());
        Category::whereId('2351')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WŁÓKIEN_CHEMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2352')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_FARMACEUTYCZNYCH)->pluck('id')->toArray());
        Category::whereId('2353')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_KOSMETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('2354')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU)->pluck('id')->toArray());
        Category::whereId('2355')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_FILTRUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2356')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_GRANULUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2357')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_HOMOGENIZUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2358')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_KOKSOWNICZYCH)->pluck('id')->toArray());
        Category::whereId('2359')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_MIESZAJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2360')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_ROZDRABNIAJĄCECH)->pluck('id')->toArray());
        Category::whereId('2361')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_SORPCYJNYCH)->pluck('id')->toArray());
        Category::whereId('2362')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WYPARENYCH)->pluck('id')->toArray());
        Category::whereId('2363')->first()->detailprojects()->attach(collect($OPERATOR_WIRÓWEK)->pluck('id')->toArray());
        Category::whereId('2364')->first()->detailprojects()->attach(collect($STOKAŻOWY)->pluck('id')->toArray());
        Category::whereId('2365')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CHEMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2366')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CHEMICZNEGO)->pluck('id')->toArray());
        Category::whereId('2368')->first()->detailprojects()->attach(collect($OPERATOR_MINILABU_FOTOGRAFICZNEGO)->pluck('id')->toArray());
        Category::whereId('2369')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_BŁON_I_FILMÓW_FOTOGRAFICZNYCH)->pluck('id')->toArray());
        Category::whereId('2370')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚWIATŁOCZUŁYCH_I_OBRÓBKI_FILMÓW)->pluck('id')->toArray());
        Category::whereId('2373')->first()->detailprojects()->attach(collect($APARATOWY_PRODUKCJI_WYROBÓW_MACZANYCH)->pluck('id')->toArray());
        Category::whereId('2374')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_WULKANIZACJI)->pluck('id')->toArray());
        Category::whereId('2375')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_SUROWCÓW_GUMOWYCH)->pluck('id')->toArray());
        Category::whereId('2376')->first()->detailprojects()->attach(collect($WULKANIZATOR)->pluck('id')->toArray());
        Category::whereId('2377')->first()->detailprojects()->attach(collect($WULKANIZATOR_TAŚM_PRZENOSNIKOWYCH)->pluck('id')->toArray());
        Category::whereId('2378')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_GUMOWYCH)->pluck('id')->toArray());
        Category::whereId('2380')->first()->detailprojects()->attach(collect($FORMIERZ_WYROBÓW_Z_KOMPOZYTÓW_POLIMEROWYCH)->pluck('id')->toArray());
        Category::whereId('2381')->first()->detailprojects()->attach(collect($FORMOWACZ_ORTOPEDYCZNYCH_WYROBÓW_Z_TWORZYW)->pluck('id')->toArray());
        Category::whereId('2382')->first()->detailprojects()->attach(collect($ODLEWNIK_WYROBÓW_Z_MATERIAŁÓW_POLIMEROWYCH)->pluck('id')->toArray());
        Category::whereId('2383')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OKIEN_Z_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2384')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_CIĘCIA_FOLII_I_PŁYT)->pluck('id')->toArray());
        Category::whereId('2385')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_Z_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2386')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_SPIENIANIA_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2387')->first()->detailprojects()->attach(collect($OPERATOR_WTRYSKARKI)->pluck('id')->toArray());
        Category::whereId('2388')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2389')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2392')->first()->detailprojects()->attach(collect($OPERATOR_KALANDRÓW_WYROBÓW_PAPIEROWYCH)->pluck('id')->toArray());
        Category::whereId('2393')->first()->detailprojects()->attach(collect($OPERATOR_LINII_DO_BELOWANIA_MAKULATURY)->pluck('id')->toArray());
        Category::whereId('2394')->first()->detailprojects()->attach(collect($OPERATOR_MASZYNY_ODWADNIAJĄCEJ_CELOZĘ)->pluck('id')->toArray());
        Category::whereId('2395')->first()->detailprojects()->attach(collect($OPERATOR_MASZYNY_PAPIERNICZEJ)->pluck('id')->toArray());
        Category::whereId('2396')->first()->detailprojects()->attach(collect($OPERATOR_MASZYNY_TEKTURNICZEJ)->pluck('id')->toArray());
        Category::whereId('2397')->first()->detailprojects()->attach(collect($OPERATOR_PERGAMINIARKI)->pluck('id')->toArray());
        Category::whereId('2398')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_BIELĄCYCH_MASY_WŁÓKNISTE)->pluck('id')->toArray());
        Category::whereId('2399')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_IMPREGNOWANIA_I_POWLEKANIA_WYROBÓW_PAPIEROWYCH)->pluck('id')->toArray());
        Category::whereId('2400')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_MIELENIA_MASY_WŁÓKNISTEJ)->pluck('id')->toArray());
        Category::whereId('2401')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWYWANIA_I_DOZOWANIA_DODATKÓW_MASOWYCH)->pluck('id')->toArray());
        Category::whereId('2402')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_SCIERANIA_DREWNA)->pluck('id')->toArray());
        Category::whereId('2403')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_RĘBALNI_DREWNA)->pluck('id')->toArray());
        Category::whereId('2404')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_ROZWŁÓKNIENIA)->pluck('id')->toArray());
        Category::whereId('2405')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WARZELNI)->pluck('id')->toArray());
        Category::whereId('2406')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_WYROBU_MASY_PAPIERNICZEJ_I_PRODUKCJI_PAPIERU)->pluck('id')->toArray());
        Category::whereId('2408')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_LAKIEROWANIA_I_LAMINOWANIA_PRZETWORÓW_PAPIEROWYCH)->pluck('id')->toArray());
        Category::whereId('2409')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_OPAKOWAŃ_Z_PAPIERU_I_TEKTURY)->pluck('id')->toArray());
        Category::whereId('2410')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_PIŚMIENNYCH)->pluck('id')->toArray());
        Category::whereId('2411')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_PAPIEROWYCH_ARTYKUŁÓW_TOALETOWYCH_I_SANITARNYCH)->pluck('id')->toArray());
        Category::whereId('2412')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_PAPIERU_I_TEKTURY_FALISTEJ)->pluck('id')->toArray());
        Category::whereId('2413')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_SZNURKA_I_TULEI)->pluck('id')->toArray());
        Category::whereId('2414')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_KROJĄCEJ_I_WYKRAWIAJĄCEJ_DO_PAPIERU)->pluck('id')->toArray());
        Category::whereId('2415')->first()->detailprojects()->attach(collect($OPERATOR_PRAS_DO_FORMOWANIA_WYROBÓW_Z_MASY_PAPIERNICZEJ)->pluck('id')->toArray());
        Category::whereId('2416')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH)->pluck('id')->toArray());
        Category::whereId('2418')->first()->detailprojects()->attach(collect($DZIEWIARZ)->pluck('id')->toArray());
        Category::whereId('2419')->first()->detailprojects()->attach(collect($PRZĘDZARZ)->pluck('id')->toArray());
        Category::whereId('2420')->first()->detailprojects()->attach(collect($TKACZ)->pluck('id')->toArray());
        Category::whereId('2422')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRZYGOTOWANIA_WŁÓKIEN)->pluck('id')->toArray());
        Category::whereId('2423')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_PRZĘDZALNICZYCH)->pluck('id')->toArray());
        Category::whereId('2424')->first()->detailprojects()->attach(collect($OPERATOR_PRZEWIJAREK_I_SKRĘCAREK_NITEK)->pluck('id')->toArray());
        Category::whereId('2425')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_PRZĘDZALNICZYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2427')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DZIEWIARSKICH)->pluck('id')->toArray());
        Category::whereId('2428')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_PRZYGOTOWAWCZYCH_DO_WYTWARZANIA_PŁASKICH_WYROBÓW_WŁÓKIENNICZYCH)->pluck('id')->toArray());
        Category::whereId('2429')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_TKACKICH)->pluck('id')->toArray());
        Category::whereId('2430')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_W_PRZEMYŚLE_WŁÓKIENNICZYM_S)->pluck('id')->toArray());
        Category::whereId('2431')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_TKACKICH_I_DZIEWIARSKICH)->pluck('id')->toArray());
        Category::whereId('2432')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_WŁÓKNIN_I_PRZĘDZIN)->pluck('id')->toArray());
        Category::whereId('2435')->first()->detailprojects()->attach(collect($LAKIERNIK_PROSZKOWY)->pluck('id')->toArray());
        Category::whereId('2436')->first()->detailprojects()->attach(collect($LAKIERNIK_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2437')->first()->detailprojects()->attach(collect($LAKIERNIK_WYROBÓW_DRZEWNYCH)->pluck('id')->toArray());
        Category::whereId('2438')->first()->detailprojects()->attach(collect($MALARZ_LAKIERNIK_SAMOLOTOWY)->pluck('id')->toArray());
        Category::whereId('2439')->first()->detailprojects()->attach(collect($MALARZ_LAKIERNIK_KONSTRUKCJI_I_WYROBÓW_METALOWYCH)->pluck('id')->toArray());
        Category::whereId('2440')->first()->detailprojects()->attach(collect($PIASKARZ)->pluck('id')->toArray());
        Category::whereId('2441')->first()->detailprojects()->attach(collect($POZOSTALI_LAKIERNICY)->pluck('id')->toArray());
        Category::whereId('2442')->first()->detailprojects()->attach(collect($POMOCNIK_LAKIERNIKA)->pluck('id')->toArray());
        Category::whereId('2445')->first()->detailprojects()->attach(collect($LUTOWACZ)->pluck('id')->toArray());
        Category::whereId('2446')->first()->detailprojects()->attach(collect($OPERATOR_ROBOTÓW_SPAWALNICZYCH)->pluck('id')->toArray());
        Category::whereId('2447')->first()->detailprojects()->attach(collect($OPERATOR_ZGRZEWAREK)->pluck('id')->toArray());
        Category::whereId('2448')->first()->detailprojects()->attach(collect($SPAWACZ)->pluck('id')->toArray());
        Category::whereId('2449')->first()->detailprojects()->attach(collect($ZGRZEWACZ)->pluck('id')->toArray());
        Category::whereId('2450')->first()->detailprojects()->attach(collect($POZOSTALI_SPAWACZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2451')->first()->detailprojects()->attach(collect($TECHNIK_SPAWALNICTWA)->pluck('id')->toArray());
        Category::whereId('2454')->first()->detailprojects()->attach(collect($EGUTERYSTA)->pluck('id')->toArray());
        Category::whereId('2455')->first()->detailprojects()->attach(collect($PLATNERZ)->pluck('id')->toArray());
        Category::whereId('2456')->first()->detailprojects()->attach(collect($RUSZNIKARZ)->pluck('id')->toArray());
        Category::whereId('2457')->first()->detailprojects()->attach(collect($ŚLUSARZ)->pluck('id')->toArray());
        Category::whereId('2458')->first()->detailprojects()->attach(collect($ŚLUSARZ_GALANTERII_METALOWEJ)->pluck('id')->toArray());
        Category::whereId('2459')->first()->detailprojects()->attach(collect($ŚLUSARZ_NARZĘDZIOWY)->pluck('id')->toArray());
        Category::whereId('2460')->first()->detailprojects()->attach(collect($TRASER)->pluck('id')->toArray());
        Category::whereId('2461')->first()->detailprojects()->attach(collect($POZOSTALI_ŚLUSARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2464')->first()->detailprojects()->attach(collect($FREZER)->pluck('id')->toArray());
        Category::whereId('2465')->first()->detailprojects()->attach(collect($OPERATOR_AUTOMATYCZNEJ_LINII_OBRÓBKI_SKRAWANIEM)->pluck('id')->toArray());
        Category::whereId('2466')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_OBRÓBKI_SKRAWANIEM)->pluck('id')->toArray());
        Category::whereId('2467')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_DRUTU_LIN_SIATEK_I_KABLI)->pluck('id')->toArray());
        Category::whereId('2468')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_ŁOŻYSK_TOCZNYCH)->pluck('id')->toArray());
        Category::whereId('2469')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_OPAKOWAŃ_BLASZANYCH)->pluck('id')->toArray());
        Category::whereId('2470')->first()->detailprojects()->attach(collect($OPERATOR_OBRABIAREK_STEROWANYCH_NUMERYCZNIE)->pluck('id')->toArray());
        Category::whereId('2471')->first()->detailprojects()->attach(collect($OPERATOR_OBRABIAREK_ZESPOŁOWYCH)->pluck('id')->toArray());
        Category::whereId('2472')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_WYWAŻANIA_I_CENTROWANIA)->pluck('id')->toArray());
        Category::whereId('2473')->first()->detailprojects()->attach(collect($STRUGACZ)->pluck('id')->toArray());
        Category::whereId('2474')->first()->detailprojects()->attach(collect($SZLIFIERZ_METALI)->pluck('id')->toArray());
        Category::whereId('2475')->first()->detailprojects()->attach(collect($TOKARZ_FREZER_OBRABIAREK_STEROWANYCH_NUMERYCZNIE)->pluck('id')->toArray());
        Category::whereId('2476')->first()->detailprojects()->attach(collect($TOKARZ_W_METALU)->pluck('id')->toArray());
        Category::whereId('2477')->first()->detailprojects()->attach(collect($USTAWIACZ_MASZYN_DO_OBRÓBKI_SKRAWANIEM)->pluck('id')->toArray());
        Category::whereId('2478')->first()->detailprojects()->attach(collect($WIERTECZ_W_METALU)->pluck('id')->toArray());
        Category::whereId('2479')->first()->detailprojects()->attach(collect($POZOSTALI_USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI)->pluck('id')->toArray());
        Category::whereId('2480')->first()->detailprojects()->attach(collect($OPERATOR_OBRABIAREK_SKRAWIAJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2481')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_METALU)->pluck('id')->toArray());
        Category::whereId('2483')->first()->detailprojects()->attach(collect($DOCIERACZ_POLEROWACZ)->pluck('id')->toArray());
        Category::whereId('2484')->first()->detailprojects()->attach(collect($SZLIFIERZ_OSTRZARZ)->pluck('id')->toArray());
        Category::whereId('2485')->first()->detailprojects()->attach(collect($POZOSTALI_SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI)->pluck('id')->toArray());
        Category::whereId('2488')->first()->detailprojects()->attach(collect($PAKOWACZ_RĘCZNY)->pluck('id')->toArray());
        Category::whereId('2489')->first()->detailprojects()->attach(collect($RĘCZNY_ZNAKOWACZ_WYROBÓW)->pluck('id')->toArray());
        Category::whereId('2491')->first()->detailprojects()->attach(collect($ŁADOWACZ)->pluck('id')->toArray());
        Category::whereId('2492')->first()->detailprojects()->attach(collect($NAPEŁNIAJĄCY_ZBIORNIKI_PRZENOŚNE)->pluck('id')->toArray());
        Category::whereId('2493')->first()->detailprojects()->attach(collect($PRACOWNIK_PRZEPUSTKOWY)->pluck('id')->toArray());
        Category::whereId('2494')->first()->detailprojects()->attach(collect($ROBOTNIK_MAGAZYNOWY)->pluck('id')->toArray());
        Category::whereId('2495')->first()->detailprojects()->attach(collect($ROBOTNIK_PRACUJĄCY_NA_RAMPIE)->pluck('id')->toArray());
        Category::whereId('2497')->first()->detailprojects()->attach(collect($SZTAUER_TRYMER)->pluck('id')->toArray());
        Category::whereId('2498')->first()->detailprojects()->attach(collect($TRAGARZ)->pluck('id')->toArray());
        Category::whereId('2499')->first()->detailprojects()->attach(collect($WAGOWY)->pluck('id')->toArray());
        Category::whereId('2500')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW)->pluck('id')->toArray());
        Category::whereId('2503')->first()->detailprojects()->attach(collect($ŁADOWACZ_NIECZYSTOŚCI_PŁYNNYCH)->pluck('id')->toArray());
        Category::whereId('2504')->first()->detailprojects()->attach(collect($ŁADOWACZ_NIECZYSTOŚCI_STAŁYCH)->pluck('id')->toArray());
        Category::whereId('2505')->first()->detailprojects()->attach(collect($PRACOWNIK_ZBIÓRKI_ODPADÓW)->pluck('id')->toArray());
        Category::whereId('2506')->first()->detailprojects()->attach(collect($POZOSTALI_ŁADOWACZE_NIECZYSTOŚCI)->pluck('id')->toArray());
        Category::whereId('2512')->first()->detailprojects()->attach(collect($ROBOTNIK_OCZYSZCZANIA_MIASTA)->pluck('id')->toArray());
        Category::whereId('2513')->first()->detailprojects()->attach(collect($ROBOTNIK_PLACOWY)->pluck('id')->toArray());
        Category::whereId('2514')->first()->detailprojects()->attach(collect($ZAMIATACZ)->pluck('id')->toArray());
        Category::whereId('2515')->first()->detailprojects()->attach(collect($POZOSTALI_ZAMIAATACZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2517')->first()->detailprojects()->attach(collect($PRACOWNIK_PRAC_DORYWCZYCH)->pluck('id')->toArray());
        Category::whereId('2518')->first()->detailprojects()->attach(collect($STATYSTA)->pluck('id')->toArray());
        Category::whereId('2519')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_WYKONUJĄCY_DORYWCZE_PRACE_PROSTE)->pluck('id')->toArray());
        Category::whereId('2521')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_KOPERTUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2522')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_MYCIA_NAPEŁNIANIA_I_ZAMYKANIA_BUTELEK)->pluck('id')->toArray());
        Category::whereId('2523')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PAKUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2524')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_ZNAKUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2525')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_PAKUJĄCYCH_ZNAKUJĄCYCH_I_URZĄDZEŃ_DO_NAPEŁNIANIA_BUTELEK)->pluck('id')->toArray());
        Category::whereId('2526')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PALETYZACJI)->pluck('id')->toArray());
        Category::whereId('2527')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_UTYLIZACJI_SUROWCÓW_ZWIERZĘCYCH)->pluck('id')->toArray());
        Category::whereId('2528')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_INNYCH_MASZYN_I_URZĄDZEŃ_PRZETWÓRCZYCH)->pluck('id')->toArray());
        Category::whereId('2529')->first()->detailprojects()->attach(collect($KONFEKCJONER_WYROBÓW_GUMOWYCH)->pluck('id')->toArray());
        Category::whereId('2530')->first()->detailprojects()->attach(collect($MONTER_WYROBÓW_TEKSTYLNYCH_Z_TEKTURY_I_POKREWNYCH_MATERIAŁÓW)->pluck('id')->toArray());
        Category::whereId('2531')->first()->detailprojects()->attach(collect($MONTER_WYROBÓW_Z_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2532')->first()->detailprojects()->attach(collect($SKŁADACZ_SPRZĘTU_SPADOCHRONOWEGO)->pluck('id')->toArray());
        Category::whereId('2533')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_GDZIE_INDZIJES_NIESKLASYFIKOWANI)->pluck('id')->toArray());
        Category::whereId('2534')->first()->detailprojects()->attach(collect($ZMYWACZ_GRAFFITI)->pluck('id')->toArray());
        Category::whereId('2536')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_KOPALNIACH_I_KAMIENIOŁOMACH)->pluck('id')->toArray());
        Category::whereId('2537')->first()->detailprojects()->attach(collect($KOPACZ)->pluck('id')->toArray());
        Category::whereId('2538')->first()->detailprojects()->attach(collect($MELIORANT)->pluck('id')->toArray());
        Category::whereId('2539')->first()->detailprojects()->attach(collect($OCZYSZCZACZ_KANALIZACYJNY)->pluck('id')->toArray());
        Category::whereId('2540')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_DROGOWYM_WODNYM_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2541')->first()->detailprojects()->attach(collect($KONSERWATOR_CZĘŚCI_SPRZĘTU)->pluck('id')->toArray());
        Category::whereId('2542')->first()->detailprojects()->attach(collect($POMOCNICZY_ROBOTNIK_PRZEMYSŁOWY)->pluck('id')->toArray());
        Category::whereId('2543')->first()->detailprojects()->attach(collect($ROBOTNIK_MYJĄCY_CZĘŚCI_I_ZESPOŁY)->pluck('id')->toArray());
        Category::whereId('2544')->first()->detailprojects()->attach(collect($SORTOWACZ)->pluck('id')->toArray());
        Category::whereId('2545')->first()->detailprojects()->attach(collect($WYDAWCA_MATERIAŁÓW)->pluck('id')->toArray());
        Category::whereId('2546')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_PRZEMYŚLE)->pluck('id')->toArray());
        Category::whereId('2547')->first()->detailprojects()->attach(collect($PROWADZĄCY_POJAZDY_NAPĘDZANE_SIŁĄ_MIĘŚNI)->pluck('id')->toArray());
        Category::whereId('2549')->first()->detailprojects()->attach(collect($DOROŻKARZ)->pluck('id')->toArray());
        Category::whereId('2550')->first()->detailprojects()->attach(collect($WOZAK)->pluck('id')->toArray());
        Category::whereId('2559')->first()->detailprojects()->attach(collect($DŹWIGOWY_WINDZIARZ)->pluck('id')->toArray());
        Category::whereId('2560')->first()->detailprojects()->attach(collect($KOLPORTER)->pluck('id')->toArray());
        Category::whereId('2561')->first()->detailprojects()->attach(collect($NOSZOWY)->pluck('id')->toArray());
        Category::whereId('2562')->first()->detailprojects()->attach(collect($POZOSTALI_GOŃCY_BAGAŻOWI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2564')->first()->detailprojects()->attach(collect($ODCZYTYWACZ_LICZNIKÓW)->pluck('id')->toArray());
        Category::whereId('2565')->first()->detailprojects()->attach(collect($WYBIERACZ_MONET_Z_AUTOMATÓW)->pluck('id')->toArray());
        Category::whereId('2566')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_KRAWCA)->pluck('id')->toArray());
        Category::whereId('2567')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_MECHANIKA)->pluck('id')->toArray());
        Category::whereId('2568')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_ŚLUSARZA)->pluck('id')->toArray());
        Category::whereId('2569')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_STOLARZA)->pluck('id')->toArray());
        Category::whereId('2570')->first()->detailprojects()->attach(collect($ASYSTENT_FRYZJERA)->pluck('id')->toArray());
        Category::whereId('2571')->first()->detailprojects()->attach(collect($MONTER_ZNAKÓW_NAWIGACYJNYCH)->pluck('id')->toArray());
        Category::whereId('2572')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_PRZEMYSŁOWI_I_RZEMIEŚLNICY_GDZIE_INDZIJES_NIESKLASYFIKOWANI)->pluck('id')->toArray());
        Category::whereId('2573')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_FRYZJERA)->pluck('id')->toArray());
        Category::whereId('2576')->first()->detailprojects()->attach(collect($POMOCNIK_ELEKTROMONTERA)->pluck('id')->toArray());


    }
}

