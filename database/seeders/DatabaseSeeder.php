<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\clase;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            
           





                
/*
     
    clase::create([
        'name' => 'Introducción a la Ingeniería en Sistemas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-110',
        'UV' => '3',
        'dificultad' => '0',
    ]);
    
     
clase::create([
        'name' => 'Matemática I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-110',
        'UV' => '5',
        'dificultad' => '1',
    ]);
    
     
clase::create([
        'name' => 'Geometría y Trigonometría',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-111',
        'UV' => '5',
        'dificultad' => '2',
    ]);
    
     
clase::create([
        'name' => 'Sociología',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'SC-101',
        'UV' => '4',
        'dificultad' => '3',
    ]);
    
     
clase::create([
        'name' => 'Vectores y Matrices',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-211',
        'UV' => '3',
        'dificultad' => '4',
    ]);
    
     
clase::create([
        'name' => 'Inglés I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IN-101',
        'UV' => '4',
        'dificultad' => '5',
    ]);
    
     
clase::create([
        'name' => 'Cálculo I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-201',
        'UV' => '5',
        'dificultad' => '6',
    ]);
    
     
clase::create([
        'name' => 'Cálculo II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-202',
        'UV' => '5',
        'dificultad' => '7',
    ]);
    
     
clase::create([
        'name' => 'Inglés II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IN-102',
        'UV' => '4',
        'dificultad' => '8',
    ]);
    
     
clase::create([
        'name' => 'Programación I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-314',
        'UV' => '3',
        'dificultad' => '9',
    ]);
    
     
clase::create([
        'name' => 'Español General 1',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'EG-011',
        'UV' => '4',
        'dificultad' => '10',
    ]);
    
     
clase::create([
        'name' => 'Física I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'FS-100',
        'UV' => '5',
        'dificultad' => '11',
    ]);
    
     
clase::create([
        'name' => 'Ecuaciones Diferenciales',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-411',
        'UV' => '3',
        'dificultad' => '12',
    ]);
    
     
clase::create([
        'name' => 'Programación II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-210',
        'UV' => '4',
        'dificultad' => '13',
    ]);
    
     
clase::create([
        'name' => 'Filosofía',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'FF-101',
        'UV' => '4',
        'dificultad' => '14',
    ]);
    
     
clase::create([
        'name' => 'Inglés III',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IN-103',
        'UV' => '4',
        'dificultad' => '15',
    ]);
    
     
clase::create([
        'name' => 'Dibujo I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'DQ-101',
        'UV' => '2',
        'dificultad' => '16',
    ]);
    
     
clase::create([
        'name' => 'Física II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'FS-200',
        'UV' => '5',
        'dificultad' => '17',
    ]);
    
     
clase::create([
        'name' => 'Circuitos Eléctricos para Ingenieria en Sistemas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-311',
        'UV' => '3',
        'dificultad' => '18',
    ]);
    
     
clase::create([
        'name' => 'Matemática Discreta',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-420',
        'UV' => '4',
        'dificultad' => '19',
    ]);
    
     
clase::create([
        'name' => 'Dibujo II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'DQ-102',
        'UV' => '2',
        'dificultad' => '20',
    ]);
    
     
clase::create([
        'name' => 'Estadística',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'MM-401',
        'UV' => '3',
        'dificultad' => '21',
    ]);
    
     
clase::create([
        'name' => 'Algoritmos y Estructura de Datos',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-310',
        'UV' => '4',
        'dificultad' => '22',
    ]);
    
     
clase::create([
        'name' => 'Programación Orientada a Objetos',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-410',
        'UV' => '5',
        'dificultad' => '23',
    ]);
    
     
clase::create([
        'name' => 'Electrónica para Ing. en Sistemas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-411',
        'UV' => '3',
        'dificultad' => '24',
    ]);
    
     
clase::create([
        'name' => 'Sistemas Operativos I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-412',
        'UV' => '4',
        'dificultad' => '25',
    ]);
    
     
clase::create([
        'name' => 'Base de Datos I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-501',
        'UV' => '5',
        'dificultad' => '26',
    ]);
    
     
clase::create([
        'name' => 'Historia de Honduras',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'HH-101',
        'UV' => '4',
        'dificultad' => '27',
    ]);
    
     
clase::create([
        'name' => 'Instalaciones Eléctricas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-510',
        'UV' => '3',
        'dificultad' => '28',
    ]);
    
     
clase::create([
        'name' => 'Redes de Datos I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-511',
        'UV' => '4',
        'dificultad' => '29',
    ]);
    
     
clase::create([
        'name' => 'Sistemas Operativos II ',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-512',
        'UV' => '4',
        'dificultad' => '30',
    ]);
    
     
clase::create([
        'name' => 'Base de Datos II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-601',
        'UV' => '4',
        'dificultad' => '31',
    ]);
    
     
clase::create([
        'name' => 'Arquitectura de Computadoras',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-603',
        'UV' => '4',
        'dificultad' => '32',
    ]);
    
     
clase::create([
        'name' => 'Lenguajes de Programación',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-513',
        'UV' => '4',
        'dificultad' => '33',
    ]);
    
     
clase::create([
        'name' => 'Redes de Datos II',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-611',
        'UV' => '4',
        'dificultad' => '34',
    ]);
    
     
clase::create([
        'name' => 'Diseño Digital',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-711',
        'UV' => '4',
        'dificultad' => '35',
    ]);
    
     
clase::create([
        'name' => 'Sistema de Información',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-602',
        'UV' => '4',
        'dificultad' => '36',
    ]);
    
     
clase::create([
        'name' => 'Seguridad Informática',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-811',
        'UV' => '4',
        'dificultad' => '37',
    ]);
    
     
clase::create([
        'name' => 'Administración I ',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-720',
        'UV' => '4',
        'dificultad' => '38',
    ]);
    
     
clase::create([
        'name' => 'Análisis y Diseño de Sistemas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-702',
        'UV' => '4',
        'dificultad' => '39',
    ]);
    
     
clase::create([
        'name' => 'Contabilidad I',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-721',
        'UV' => '4',
        'dificultad' => '40',
    ]);
    
     
clase::create([
        'name' => 'Auditoría Informática',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-903',
        'UV' => '3',
        'dificultad' => '41',
    ]);
    
     
clase::create([
        'name' => 'Inteligencia Artificial',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-701',
        'UV' => '4',
        'dificultad' => '42',
    ]);
    
     
clase::create([
        'name' => 'Ingeniería del Software',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-802',
        'UV' => '4',
        'dificultad' => '43',
    ]);
    
     
clase::create([
        'name' => 'Finanzas Administrativas',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-820',
        'UV' => '4',
        'dificultad' => '44',
    ]);
    
     
clase::create([
        'name' => 'Industria del Software',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-902',
        'UV' => '4',
        'dificultad' => '45',
    ]);
    
     
clase::create([
        'name' => 'Gerencia Informática',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-904',
        'UV' => '4',
        'dificultad' => '46',
    ]);
    
     
clase::create([
        'name' => 'Tópicos Especiales y Avanzados',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-906',
        'UV' => '5',
        'dificultad' => '47',
    ]);
    
     
clase::create([
        'name' => 'Economía Digital',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-905',
        'UV' => '5',
        'dificultad' => '48',
    ]);
    
     
clase::create([
        'name' => 'Seminario de Investigación',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-115',
        'UV' => '0',
        'dificultad' => '49',
    ]);
    
     
clase::create([
        'name' => 'Teoría de la Simulación',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-910',
        'UV' => '3',
        'dificultad' => '50',
    ]);
    
     
clase::create([
        'name' => 'Microprocesadores',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-911',
        'UV' => '3',
        'dificultad' => '51',
    ]);
    
     
clase::create([
        'name' => 'Liderazgo para el cambio',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-914',
        'UV' => '3',
        'dificultad' => '52',
    ]);
    
     
clase::create([
        'name' => 'Sistemas Expertos',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-912',
        'UV' => '3',
        'dificultad' => '53',
    ]);
    
     
clase::create([
        'name' => 'Diseño de Compiladores',
        'description' => ' ',
        'departamento' => '1',
        'codigo' => 'IS-913',
        'UV' => '3',
        'dificultad' => '54',
    ]);
    */

            

    /*
    DB::table('puente')->insert([
        'clases_id' => '1',
        'career_id' => '1',
        'prioridad' => '35',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '2',
        'career_id' => '1',
        'prioridad' => '89',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '3',
        'career_id' => '1',
        'prioridad' => '37',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '4',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '5',
        'career_id' => '1',
        'prioridad' => '16',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '6',
        'career_id' => '1',
        'prioridad' => '2',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '7',
        'career_id' => '1',
        'prioridad' => '37',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '8',
        'career_id' => '1',
        'prioridad' => '20',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '9',
        'career_id' => '1',
        'prioridad' => '1',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '10',
        'career_id' => '1',
        'prioridad' => '34',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '11',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '12',
        'career_id' => '1',
        'prioridad' => '15',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '13',
        'career_id' => '1',
        'prioridad' => '14',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '14',
        'career_id' => '1',
        'prioridad' => '20',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '15',
        'career_id' => '1',
        'prioridad' => '13',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '16',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '17',
        'career_id' => '1',
        'prioridad' => '1',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '18',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '19',
        'career_id' => '1',
        'prioridad' => '13',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '20',
        'career_id' => '1',
        'prioridad' => '12',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '21',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '22',
        'career_id' => '1',
        'prioridad' => '4',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '23',
        'career_id' => '1',
        'prioridad' => '19',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '24',
        'career_id' => '1',
        'prioridad' => '11',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '25',
        'career_id' => '1',
        'prioridad' => '12',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '26',
        'career_id' => '1',
        'prioridad' => '6',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '27',
        'career_id' => '1',
        'prioridad' => '3',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '28',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '29',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '30',
        'career_id' => '1',
        'prioridad' => '10',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '31',
        'career_id' => '1',
        'prioridad' => '5',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '32',
        'career_id' => '1',
        'prioridad' => '2',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '33',
        'career_id' => '1',
        'prioridad' => '8',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '34',
        'career_id' => '1',
        'prioridad' => '6',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '35',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '36',
        'career_id' => '1',
        'prioridad' => '5',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '37',
        'career_id' => '1',
        'prioridad' => '5',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '38',
        'career_id' => '1',
        'prioridad' => '4',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '39',
        'career_id' => '1',
        'prioridad' => '4',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '40',
        'career_id' => '1',
        'prioridad' => '2',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '41',
        'career_id' => '1',
        'prioridad' => '3',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '42',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '43',
        'career_id' => '1',
        'prioridad' => '1',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '44',
        'career_id' => '1',
        'prioridad' => '1',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '45',
        'career_id' => '1',
        'prioridad' => '2',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '46',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '47',
        'career_id' => '1',
        'prioridad' => '2',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '48',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '49',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '50',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '51',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '52',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '53',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '54',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

DB::table('puente')->insert([
        'clases_id' => '55',
        'career_id' => '1',
        'prioridad' => '0',
        
    ]);

*/
            
/*
     
DB::table('requisitos')->insert([
    'clases_id' => '2',
    'puente_id' => '5',
]);

DB::table('requisitos')->insert([
    'clases_id' => '2',
    'puente_id' => '7',
]);

DB::table('requisitos')->insert([
    'clases_id' => '3',
    'puente_id' => '7',
]);

DB::table('requisitos')->insert([
    'clases_id' => '7',
    'puente_id' => '8',
]);

DB::table('requisitos')->insert([
    'clases_id' => '6',
    'puente_id' => '9',
]);

DB::table('requisitos')->insert([
    'clases_id' => '1',
    'puente_id' => '10',
]);

DB::table('requisitos')->insert([
    'clases_id' => '2',
    'puente_id' => '10',
]);

DB::table('requisitos')->insert([
    'clases_id' => '7',
    'puente_id' => '12',
]);

DB::table('requisitos')->insert([
    'clases_id' => '5',
    'puente_id' => '12',
]);

DB::table('requisitos')->insert([
    'clases_id' => '8',
    'puente_id' => '13',
]);

DB::table('requisitos')->insert([
    'clases_id' => '10',
    'puente_id' => '14',
]);

DB::table('requisitos')->insert([
    'clases_id' => '9',
    'puente_id' => '16',
]);

DB::table('requisitos')->insert([
    'clases_id' => '5',
    'puente_id' => '17',
]);

DB::table('requisitos')->insert([
    'clases_id' => '12',
    'puente_id' => '18',
]);

DB::table('requisitos')->insert([
    'clases_id' => '13',
    'puente_id' => '19',
]);

DB::table('requisitos')->insert([
    'clases_id' => '12',
    'puente_id' => '19',
]);

DB::table('requisitos')->insert([
    'clases_id' => '10',
    'puente_id' => '20',
]);

DB::table('requisitos')->insert([
    'clases_id' => '15',
    'puente_id' => '20',
]);

DB::table('requisitos')->insert([
    'clases_id' => '17',
    'puente_id' => '21',
]);

DB::table('requisitos')->insert([
    'clases_id' => '8',
    'puente_id' => '22',
]);

DB::table('requisitos')->insert([
    'clases_id' => '14',
    'puente_id' => '23',
]);

DB::table('requisitos')->insert([
    'clases_id' => '23',
    'puente_id' => '24',
]);

DB::table('requisitos')->insert([
    'clases_id' => '19',
    'puente_id' => '25',
]);

DB::table('requisitos')->insert([
    'clases_id' => '23',
    'puente_id' => '26',
]);

DB::table('requisitos')->insert([
    'clases_id' => '20',
    'puente_id' => '26',
]);

DB::table('requisitos')->insert([
    'clases_id' => '22',
    'puente_id' => '27',
]);

DB::table('requisitos')->insert([
    'clases_id' => '24',
    'puente_id' => '27',
]);

DB::table('requisitos')->insert([
    'clases_id' => '19',
    'puente_id' => '29',
]);

DB::table('requisitos')->insert([
    'clases_id' => '25',
    'puente_id' => '30',
]);

DB::table('requisitos')->insert([
    'clases_id' => '26',
    'puente_id' => '31',
]);

DB::table('requisitos')->insert([
    'clases_id' => '27',
    'puente_id' => '32',
]);

DB::table('requisitos')->insert([
    'clases_id' => '30',
    'puente_id' => '33',
]);

DB::table('requisitos')->insert([
    'clases_id' => '24',
    'puente_id' => '34',
]);

DB::table('requisitos')->insert([
    'clases_id' => '30',
    'puente_id' => '35',
]);

DB::table('requisitos')->insert([
    'clases_id' => '33',
    'puente_id' => '36',
]);

DB::table('requisitos')->insert([
    'clases_id' => '34',
    'puente_id' => '37',
]);

DB::table('requisitos')->insert([
    'clases_id' => '36',
    'puente_id' => '38',
]);

DB::table('requisitos')->insert([
    'clases_id' => '31',
    'puente_id' => '38',
]);

DB::table('requisitos')->insert([
    'clases_id' => '20',
    'puente_id' => '39',
]);

DB::table('requisitos')->insert([
    'clases_id' => '37',
    'puente_id' => '40',
]);

DB::table('requisitos')->insert([
    'clases_id' => '39',
    'puente_id' => '41',
]);

DB::table('requisitos')->insert([
    'clases_id' => '38',
    'puente_id' => '42',
]);

DB::table('requisitos')->insert([
    'clases_id' => '32',
    'puente_id' => '43',
]);

DB::table('requisitos')->insert([
    'clases_id' => '37',
    'puente_id' => '43',
]);

DB::table('requisitos')->insert([
    'clases_id' => '40',
    'puente_id' => '44',
]);

DB::table('requisitos')->insert([
    'clases_id' => '41',
    'puente_id' => '45',
]);

DB::table('requisitos')->insert([
    'clases_id' => '44',
    'puente_id' => '46',
]);

DB::table('requisitos')->insert([
    'clases_id' => '38',
    'puente_id' => '47',
]);

DB::table('requisitos')->insert([
    'clases_id' => '47',
    'puente_id' => '48',
]);

DB::table('requisitos')->insert([
    'clases_id' => '45',
    'puente_id' => '49',
]);

DB::table('requisitos')->insert([
    'clases_id' => '47',
    'puente_id' => '51',
]);

DB::table('requisitos')->insert([
    'clases_id' => '33',
    'puente_id' => '52',
]);

DB::table('requisitos')->insert([
    'clases_id' => '45',
    'puente_id' => '53',
]);

DB::table('requisitos')->insert([
    'clases_id' => '43',
    'puente_id' => '54',
]);

DB::table('requisitos')->insert([
    'clases_id' => '33',
    'puente_id' => '55',
]);

*/
    }
}
