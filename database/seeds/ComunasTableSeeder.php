<?php

use Illuminate\Database\Seeder;

class ComunasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comunas')->delete();
        
        \DB::table('comunas')->insert(array (
            0 => 
            array (
                'id' => 1101,
                'nombre' => 'Iquique',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1107,
                'nombre' => 'Alto Hospicio',
                'provincia_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1401,
                'nombre' => 'Pozo Almonte',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1402,
                'nombre' => 'Camiña',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1403,
                'nombre' => 'Colchane',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1404,
                'nombre' => 'Huara',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1405,
                'nombre' => 'Pica',
                'provincia_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2101,
                'nombre' => 'Antofagasta',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2102,
                'nombre' => 'Mejillones',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2103,
                'nombre' => 'Sierra Gorda',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2104,
                'nombre' => 'Taltal',
                'provincia_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2201,
                'nombre' => 'Calama',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2202,
                'nombre' => 'Ollagüe',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2203,
                'nombre' => 'San Pedro de Atacama',
                'provincia_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2301,
                'nombre' => 'Tocopilla',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2302,
                'nombre' => 'María Elena',
                'provincia_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 3101,
                'nombre' => 'Copiapó',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 3102,
                'nombre' => 'Caldera',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 3103,
                'nombre' => 'Tierra Amarilla',
                'provincia_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 3201,
                'nombre' => 'Chañaral',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 3202,
                'nombre' => 'Diego de Almagro',
                'provincia_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 3301,
                'nombre' => 'Vallenar',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 3302,
                'nombre' => 'Alto del Carmen',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 3303,
                'nombre' => 'Freirina',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 3304,
                'nombre' => 'Huasco',
                'provincia_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 4101,
                'nombre' => 'La Serena',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 4102,
                'nombre' => 'Coquimbo',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 4103,
                'nombre' => 'Andacollo',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 4104,
                'nombre' => 'La Higuera',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 4105,
                'nombre' => 'Paihuano',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 4106,
                'nombre' => 'Vicuña',
                'provincia_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 4201,
                'nombre' => 'Illapel',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 4202,
                'nombre' => 'Canela',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 4203,
                'nombre' => 'Los Vilos',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 4204,
                'nombre' => 'Salamanca',
                'provincia_id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 4301,
                'nombre' => 'Ovalle',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 4302,
                'nombre' => 'Combarbalá',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 4303,
                'nombre' => 'Monte Patria',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 4304,
                'nombre' => 'Punitaqui',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 4305,
                'nombre' => 'Río Hurtado',
                'provincia_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 5101,
                'nombre' => 'Valparaíso',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 5102,
                'nombre' => 'Casablanca',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 5103,
                'nombre' => 'Concón',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 5104,
                'nombre' => 'Juan Fernández',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 5105,
                'nombre' => 'Puchuncaví',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 5107,
                'nombre' => 'Quintero',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 5109,
                'nombre' => 'Viña del Mar',
                'provincia_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 5201,
                'nombre' => 'Isla de Pascua',
                'provincia_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 5301,
                'nombre' => 'Los Andes',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 5302,
                'nombre' => 'Calle Larga',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 5303,
                'nombre' => 'Rinconada',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 5304,
                'nombre' => 'San Esteban',
                'provincia_id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 5401,
                'nombre' => 'La Ligua',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 5402,
                'nombre' => 'Cabildo',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 5403,
                'nombre' => 'Papudo',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 5404,
                'nombre' => 'Petorca',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 5405,
                'nombre' => 'Zapallar',
                'provincia_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 5501,
                'nombre' => 'Quillota',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 5502,
                'nombre' => 'La Calera',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 5503,
                'nombre' => 'Hijuelas',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 5504,
                'nombre' => 'La Cruz',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 5506,
                'nombre' => 'Nogales',
                'provincia_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 5601,
                'nombre' => 'San Antonio',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 5602,
                'nombre' => 'Algarrobo',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 5603,
                'nombre' => 'Cartagena',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 5604,
                'nombre' => 'El Quisco',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 5605,
                'nombre' => 'El Tabo',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 5606,
                'nombre' => 'Santo Domingo',
                'provincia_id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 5701,
                'nombre' => 'San Felipe',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 5702,
                'nombre' => 'Catemu',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 5703,
                'nombre' => 'Llay Llay',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 5704,
                'nombre' => 'Panquehue',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 5705,
                'nombre' => 'Putaendo',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 5706,
                'nombre' => 'Santa María',
                'provincia_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 5801,
                'nombre' => 'Quilpué',
                'provincia_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 5802,
                'nombre' => 'Limache',
                'provincia_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 5803,
                'nombre' => 'Olmué',
                'provincia_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 5804,
                'nombre' => 'Villa Alemana',
                'provincia_id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 6101,
                'nombre' => 'Rancagua',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 6102,
                'nombre' => 'Codegua',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 6103,
                'nombre' => 'Coinco',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 6104,
                'nombre' => 'Coltauco',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 6105,
                'nombre' => 'Doñihue',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 6106,
                'nombre' => 'Graneros',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 6107,
                'nombre' => 'Las Cabras',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 6108,
                'nombre' => 'Machalí',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 6109,
                'nombre' => 'Malloa',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 6110,
                'nombre' => 'Mostazal',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 6111,
                'nombre' => 'Olivar',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 6112,
                'nombre' => 'Peumo',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 6113,
                'nombre' => 'Pichidegua',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 6114,
                'nombre' => 'Quinta de Tilcoco',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 6115,
                'nombre' => 'Rengo',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 6116,
                'nombre' => 'Requínoa',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 6117,
                'nombre' => 'San Vicente',
                'provincia_id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 6201,
                'nombre' => 'Pichilemu',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 6202,
                'nombre' => 'La Estrella',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 6203,
                'nombre' => 'Litueche',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 6204,
                'nombre' => 'Marchihue',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 6205,
                'nombre' => 'Navidad',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 6206,
                'nombre' => 'Paredones',
                'provincia_id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 6301,
                'nombre' => 'San Fernando',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 6302,
                'nombre' => 'Chépica',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 6303,
                'nombre' => 'Chimbarongo',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 6304,
                'nombre' => 'Lolol',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 6305,
                'nombre' => 'Nancagua',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 6306,
                'nombre' => 'Palmilla',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 6307,
                'nombre' => 'Peralillo',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 6308,
                'nombre' => 'Placilla',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 6309,
                'nombre' => 'Pumanque',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 6310,
                'nombre' => 'Santa Cruz',
                'provincia_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 7101,
                'nombre' => 'Talca',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 7102,
                'nombre' => 'Constitución',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 7103,
                'nombre' => 'Curepto',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 7104,
                'nombre' => 'Empedrado',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 7105,
                'nombre' => 'Maule',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 7106,
                'nombre' => 'Pelarco',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 7107,
                'nombre' => 'Pencahue',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 7108,
                'nombre' => 'Río Claro',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 7109,
                'nombre' => 'San Clemente',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 7110,
                'nombre' => 'San Rafael',
                'provincia_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 7201,
                'nombre' => 'Cauquenes',
                'provincia_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 7202,
                'nombre' => 'Chanco',
                'provincia_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 7203,
                'nombre' => 'Pelluhue',
                'provincia_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 7301,
                'nombre' => 'Curicó',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 7302,
                'nombre' => 'Hualañé',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 7303,
                'nombre' => 'Licantén',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 7304,
                'nombre' => 'Molina',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 7305,
                'nombre' => 'Rauco',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 7306,
                'nombre' => 'Romeral',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 7307,
                'nombre' => 'Sagrada Familia',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 7308,
                'nombre' => 'Teno',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 7309,
                'nombre' => 'Vichuquén',
                'provincia_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 7401,
                'nombre' => 'Linares',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 7402,
                'nombre' => 'Colbún',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 7403,
                'nombre' => 'Longaví',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 7404,
                'nombre' => 'Parral',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 7405,
                'nombre' => 'Retiro',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 7406,
                'nombre' => 'San Javier',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 7407,
                'nombre' => 'Villa Alegre',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 7408,
                'nombre' => 'Yerbas Buenas',
                'provincia_id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 8101,
                'nombre' => 'Concepción',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 8102,
                'nombre' => 'Coronel',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 8103,
                'nombre' => 'Chiguayante',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 8104,
                'nombre' => 'Florida',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 8105,
                'nombre' => 'Hualqui',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 8106,
                'nombre' => 'Lota',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 8107,
                'nombre' => 'Penco',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 8108,
                'nombre' => 'San Pedro de la Paz',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 8109,
                'nombre' => 'Santa Juana',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 8110,
                'nombre' => 'Talcahuano',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 8111,
                'nombre' => 'Tomé',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 8112,
                'nombre' => 'Hualpén',
                'provincia_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 8201,
                'nombre' => 'Lebu',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 8202,
                'nombre' => 'Arauco',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 8203,
                'nombre' => 'Cañete',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 8204,
                'nombre' => 'Contulmo',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 8205,
                'nombre' => 'Curanilahue',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 8206,
                'nombre' => 'Los Álamos',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 8207,
                'nombre' => 'Tirúa',
                'provincia_id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 8301,
                'nombre' => 'Los Ángeles',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 8302,
                'nombre' => 'Antuco',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 8303,
                'nombre' => 'Cabrero',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 8304,
                'nombre' => 'Laja',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 8305,
                'nombre' => 'Mulchén',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 8306,
                'nombre' => 'Nacimiento',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 8307,
                'nombre' => 'Negrete',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 8308,
                'nombre' => 'Quilaco',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 8309,
                'nombre' => 'Quilleco',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 8310,
                'nombre' => 'San Rosendo',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 8311,
                'nombre' => 'Santa Bárbara',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 8312,
                'nombre' => 'Tucapel',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 8313,
                'nombre' => 'Yumbel',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 8314,
                'nombre' => 'Alto Biobío',
                'provincia_id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 8401,
                'nombre' => 'Chillán',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 8402,
                'nombre' => 'Bulnes',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 8403,
                'nombre' => 'Cobquecura',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 8404,
                'nombre' => 'Coelemu',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 8405,
                'nombre' => 'Coihueco',
                'provincia_id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 8406,
                'nombre' => 'Chillán Viejo',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 8407,
                'nombre' => 'El Carmen',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 8408,
                'nombre' => 'Ninhue',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 8409,
                'nombre' => 'Ñiquén',
                'provincia_id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 8410,
                'nombre' => 'Pemuco',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 8411,
                'nombre' => 'Pinto',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 8412,
                'nombre' => 'Portezuelo',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 8413,
                'nombre' => 'Quillón',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 8414,
                'nombre' => 'Quirihue',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 8415,
                'nombre' => 'Ránquil',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 8416,
                'nombre' => 'San Carlos',
                'provincia_id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 8417,
                'nombre' => 'San Fabián',
                'provincia_id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 8418,
                'nombre' => 'San Ignacio',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 8419,
                'nombre' => 'San Nicolás',
                'provincia_id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 8420,
                'nombre' => 'Treguaco',
                'provincia_id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 8421,
                'nombre' => 'Yungay',
                'provincia_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 9101,
                'nombre' => 'Temuco',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 9102,
                'nombre' => 'Carahue',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 9103,
                'nombre' => 'Cunco',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 9104,
                'nombre' => 'Curarrehue',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 9105,
                'nombre' => 'Freire',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 9106,
                'nombre' => 'Galvarino',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 9107,
                'nombre' => 'Gorbea',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 9108,
                'nombre' => 'Lautaro',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 9109,
                'nombre' => 'Loncoche',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 9110,
                'nombre' => 'Melipeuco',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 9111,
                'nombre' => 'Nueva Imperial',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 9112,
                'nombre' => 'Padre las Casas',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 9113,
                'nombre' => 'Perquenco',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 9114,
                'nombre' => 'Pitrufquén',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 9115,
                'nombre' => 'Pucón',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 9116,
                'nombre' => 'Saavedra',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 9117,
                'nombre' => 'Teodoro Schmidt',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 9118,
                'nombre' => 'Toltén',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 9119,
                'nombre' => 'Vilcún',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 9120,
                'nombre' => 'Villarrica',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 9121,
                'nombre' => 'Cholchol',
                'provincia_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 9201,
                'nombre' => 'Angol',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 9202,
                'nombre' => 'Collipulli',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 9203,
                'nombre' => 'Curacautín',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 9204,
                'nombre' => 'Ercilla',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 9205,
                'nombre' => 'Lonquimay',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 9206,
                'nombre' => 'Los Sauces',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 9207,
                'nombre' => 'Lumaco',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 9208,
                'nombre' => 'Purén',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 9209,
                'nombre' => 'Renaico',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 9210,
                'nombre' => 'Traiguén',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 9211,
                'nombre' => 'Victoria',
                'provincia_id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 10101,
                'nombre' => 'Puerto Montt',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 10102,
                'nombre' => 'Calbuco',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 10103,
                'nombre' => 'Cochamó',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 10104,
                'nombre' => 'Fresia',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 10105,
                'nombre' => 'Frutillar',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 10106,
                'nombre' => 'Los Muermos',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 10107,
                'nombre' => 'Llanquihue',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 10108,
                'nombre' => 'Maullín',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 10109,
                'nombre' => 'Puerto Varas',
                'provincia_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 10201,
                'nombre' => 'Castro',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 10202,
                'nombre' => 'Ancud',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 10203,
                'nombre' => 'Chonchi',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 10204,
                'nombre' => 'Curaco de Vélez',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 10205,
                'nombre' => 'Dalcahue',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 10206,
                'nombre' => 'Puqueldón',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 10207,
                'nombre' => 'Queilén',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 10208,
                'nombre' => 'Quellón',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 10209,
                'nombre' => 'Quemchi',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 10210,
                'nombre' => 'Quinchao',
                'provincia_id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 10301,
                'nombre' => 'Osorno',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 10302,
                'nombre' => 'Puerto Octay',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 10303,
                'nombre' => 'Purranque',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 10304,
                'nombre' => 'Puyehue',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 10305,
                'nombre' => 'Río Negro',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 10306,
                'nombre' => 'San Juan de la Costa',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 10307,
                'nombre' => 'San Pablo',
                'provincia_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 10401,
                'nombre' => 'Chaitén',
                'provincia_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 10402,
                'nombre' => 'Futaleufú',
                'provincia_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 10403,
                'nombre' => 'Hualaihué',
                'provincia_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 10404,
                'nombre' => 'Palena',
                'provincia_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 11101,
                'nombre' => 'Coyhaique',
                'provincia_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 11102,
                'nombre' => 'Lago Verde',
                'provincia_id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 11201,
                'nombre' => 'Aysén',
                'provincia_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 11202,
                'nombre' => 'Cisnes',
                'provincia_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 11203,
                'nombre' => 'Guaitecas',
                'provincia_id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 11301,
                'nombre' => 'Cochrane',
                'provincia_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 11302,
                'nombre' => 'O\'Higgins',
                'provincia_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 11303,
                'nombre' => 'Tortel',
                'provincia_id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 11401,
                'nombre' => 'Chile Chico',
                'provincia_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 11402,
                'nombre' => 'Río Ibáñez',
                'provincia_id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 12101,
                'nombre' => 'Punta Arenas',
                'provincia_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 12102,
                'nombre' => 'Laguna Blanca',
                'provincia_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 12103,
                'nombre' => 'Río Verde',
                'provincia_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 12104,
                'nombre' => 'San Gregorio',
                'provincia_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 12201,
                'nombre' => 'Cabo de Hornos',
                'provincia_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 12202,
                'nombre' => 'Antártica',
                'provincia_id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 12301,
                'nombre' => 'Porvenir',
                'provincia_id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 12302,
                'nombre' => 'Primavera',
                'provincia_id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 12303,
                'nombre' => 'Timaukel',
                'provincia_id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 12401,
                'nombre' => 'Natales',
                'provincia_id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 12402,
                'nombre' => 'Torres del Paine',
                'provincia_id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 13101,
                'nombre' => 'Santiago',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 13102,
                'nombre' => 'Cerrillos',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 13103,
                'nombre' => 'Cerro Navia',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 13104,
                'nombre' => 'Conchalí',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 13105,
                'nombre' => 'El Bosque',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 13106,
                'nombre' => 'Estación Central',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 13107,
                'nombre' => 'Huechuraba',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 13108,
                'nombre' => 'Independencia',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 13109,
                'nombre' => 'La Cisterna',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 13110,
                'nombre' => 'La Florida',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 13111,
                'nombre' => 'La Granja',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 13112,
                'nombre' => 'La Pintana',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 13113,
                'nombre' => 'La Reina',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 13114,
                'nombre' => 'Las Condes',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 13115,
                'nombre' => 'Lo Barnechea',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 13116,
                'nombre' => 'Lo Espejo',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 13117,
                'nombre' => 'Lo Prado',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 13118,
                'nombre' => 'Macul',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 13119,
                'nombre' => 'Maipú',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 13120,
                'nombre' => 'Ñuñoa',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 13121,
                'nombre' => 'Pedro Aguirre Cerda',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 13122,
                'nombre' => 'Peñalolén',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 13123,
                'nombre' => 'Providencia',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 13124,
                'nombre' => 'Pudahuel',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 13125,
                'nombre' => 'Quilicura',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 13126,
                'nombre' => 'Quinta Normal',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 13127,
                'nombre' => 'Recoleta',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 13128,
                'nombre' => 'Renca',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 13129,
                'nombre' => 'San Joaquín',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 13130,
                'nombre' => 'San Miguel',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 13131,
                'nombre' => 'San Ramón',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 13132,
                'nombre' => 'Vitacura',
                'provincia_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 13201,
                'nombre' => 'Puente Alto',
                'provincia_id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 13202,
                'nombre' => 'Pirque',
                'provincia_id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 13203,
                'nombre' => 'San José de Maipo',
                'provincia_id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 13301,
                'nombre' => 'Colina',
                'provincia_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 13302,
                'nombre' => 'Lampa',
                'provincia_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 13303,
                'nombre' => 'Tiltil',
                'provincia_id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 13401,
                'nombre' => 'San Bernardo',
                'provincia_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 13402,
                'nombre' => 'Buin',
                'provincia_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 13403,
                'nombre' => 'Calera de Tango',
                'provincia_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 13404,
                'nombre' => 'Paine',
                'provincia_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 13501,
                'nombre' => 'Melipilla',
                'provincia_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 13502,
                'nombre' => 'Alhué',
                'provincia_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 13503,
                'nombre' => 'Curacaví',
                'provincia_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 13504,
                'nombre' => 'María Pinto',
                'provincia_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 13505,
                'nombre' => 'San Pedro',
                'provincia_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 13601,
                'nombre' => 'Talagante',
                'provincia_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 13602,
                'nombre' => 'El Monte',
                'provincia_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 13603,
                'nombre' => 'Isla de Maipo',
                'provincia_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 13604,
                'nombre' => 'Padre Hurtado',
                'provincia_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 13605,
                'nombre' => 'Peñaflor',
                'provincia_id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 14101,
                'nombre' => 'Valdivia',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 14102,
                'nombre' => 'Corral',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 14103,
                'nombre' => 'Lanco',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 14104,
                'nombre' => 'Los Lagos',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 14105,
                'nombre' => 'Máfil',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 14106,
                'nombre' => 'Mariquina',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 14107,
                'nombre' => 'Paillaco',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 14108,
                'nombre' => 'Panguipulli',
                'provincia_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 14201,
                'nombre' => 'La Unión',
                'provincia_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 14202,
                'nombre' => 'Futrono',
                'provincia_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 14203,
                'nombre' => 'Lago Ranco',
                'provincia_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 14204,
                'nombre' => 'Río Bueno',
                'provincia_id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 15101,
                'nombre' => 'Arica',
                'provincia_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 15102,
                'nombre' => 'Camarones',
                'provincia_id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 15201,
                'nombre' => 'Putre',
                'provincia_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 15202,
                'nombre' => 'General Lagos',
                'provincia_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}