<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importar el modelo clase
use App\Models\clase;

class claseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // crear los registros del modelo clase
        clase::create([
            'name' => 'Introducción a la Ingeniería en Sistemas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-110',
            'UV' => '3',
            'difulcutad' => '0',
        ]);
        
         
    clase::create([
            'name' => 'Matemática I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-110',
            'UV' => '5',
            'difulcutad' => '1',
        ]);
        
         
    clase::create([
            'name' => 'Geometría y Trigonometría',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-111',
            'UV' => '5',
            'difulcutad' => '2',
        ]);
        
         
    clase::create([
            'name' => 'Sociología',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'SC-101',
            'UV' => '4',
            'difulcutad' => '3',
        ]);
        
         
    clase::create([
            'name' => 'Vectores y Matrices',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-211',
            'UV' => '3',
            'difulcutad' => '4',
        ]);
        
         
    clase::create([
            'name' => 'Inglés I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IN-101',
            'UV' => '4',
            'difulcutad' => '5',
        ]);
        
         
    clase::create([
            'name' => 'Cálculo I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-201',
            'UV' => '5',
            'difulcutad' => '6',
        ]);
        
         
    clase::create([
            'name' => 'Cálculo II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-202',
            'UV' => '5',
            'difulcutad' => '7',
        ]);
        
         
    clase::create([
            'name' => 'Inglés II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IN-102',
            'UV' => '4',
            'difulcutad' => '8',
        ]);
        
         
    clase::create([
            'name' => 'Programación I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-314',
            'UV' => '3',
            'difulcutad' => '9',
        ]);
        
         
    clase::create([
            'name' => 'Español General 1',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'EG-011',
            'UV' => '4',
            'difulcutad' => '10',
        ]);
        
         
    clase::create([
            'name' => 'Física I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'FS-100',
            'UV' => '5',
            'difulcutad' => '11',
        ]);
        
         
    clase::create([
            'name' => 'Ecuaciones Diferenciales',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-411',
            'UV' => '3',
            'difulcutad' => '12',
        ]);
        
         
    clase::create([
            'name' => 'Programación II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-210',
            'UV' => '4',
            'difulcutad' => '13',
        ]);
        
         
    clase::create([
            'name' => 'Filosofía',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'FF-101',
            'UV' => '4',
            'difulcutad' => '14',
        ]);
        
         
    clase::create([
            'name' => 'Inglés III',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IN-103',
            'UV' => '4',
            'difulcutad' => '15',
        ]);
        
         
    clase::create([
            'name' => 'Dibujo I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'DQ-101',
            'UV' => '2',
            'difulcutad' => '16',
        ]);
        
         
    clase::create([
            'name' => 'Física II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'FS-200',
            'UV' => '5',
            'difulcutad' => '17',
        ]);
        
         
    clase::create([
            'name' => 'Circuitos Eléctricos para Ingenieria en Sistemas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-311',
            'UV' => '3',
            'difulcutad' => '18',
        ]);
        
         
    clase::create([
            'name' => 'Matemática Discreta',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-420',
            'UV' => '4',
            'difulcutad' => '19',
        ]);
        
         
    clase::create([
            'name' => 'Dibujo II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'DQ-102',
            'UV' => '2',
            'difulcutad' => '20',
        ]);
        
         
    clase::create([
            'name' => 'Estadística',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'MM-401',
            'UV' => '3',
            'difulcutad' => '21',
        ]);
        
         
    clase::create([
            'name' => 'Algoritmos y Estructura de Datos',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-310',
            'UV' => '4',
            'difulcutad' => '22',
        ]);
        
         
    clase::create([
            'name' => 'Programación Orientada a Objetos',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-410',
            'UV' => '5',
            'difulcutad' => '23',
        ]);
        
         
    clase::create([
            'name' => 'Electrónica para Ing. en Sistemas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-411',
            'UV' => '3',
            'difulcutad' => '24',
        ]);
        
         
    clase::create([
            'name' => 'Sistemas Operativos I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-412',
            'UV' => '4',
            'difulcutad' => '25',
        ]);
        
         
    clase::create([
            'name' => 'Base de Datos I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-501',
            'UV' => '5',
            'difulcutad' => '26',
        ]);
        
         
    clase::create([
            'name' => 'Historia de Honduras',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'HH-101',
            'UV' => '4',
            'difulcutad' => '27',
        ]);
        
         
    clase::create([
            'name' => 'Instalaciones Eléctricas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-510',
            'UV' => '3',
            'difulcutad' => '28',
        ]);
        
         
    clase::create([
            'name' => 'Redes de Datos I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-511',
            'UV' => '4',
            'difulcutad' => '29',
        ]);
        
         
    clase::create([
            'name' => 'Sistemas Operativos II ',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-512',
            'UV' => '4',
            'difulcutad' => '30',
        ]);
        
         
    clase::create([
            'name' => 'Base de Datos II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-601',
            'UV' => '4',
            'difulcutad' => '31',
        ]);
        
         
    clase::create([
            'name' => 'Arquitectura de Computadoras',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-603',
            'UV' => '4',
            'difulcutad' => '32',
        ]);
        
         
    clase::create([
            'name' => 'Lenguajes de Programación',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-513',
            'UV' => '4',
            'difulcutad' => '33',
        ]);
        
         
    clase::create([
            'name' => 'Redes de Datos II',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-611',
            'UV' => '4',
            'difulcutad' => '34',
        ]);
        
         
    clase::create([
            'name' => 'Diseño Digital',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-711',
            'UV' => '4',
            'difulcutad' => '35',
        ]);
        
         
    clase::create([
            'name' => 'Sistema de Información',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-602',
            'UV' => '4',
            'difulcutad' => '36',
        ]);
        
         
    clase::create([
            'name' => 'Seguridad Informática',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-811',
            'UV' => '4',
            'difulcutad' => '37',
        ]);
        
         
    clase::create([
            'name' => 'Administración I ',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-720',
            'UV' => '4',
            'difulcutad' => '38',
        ]);
        
         
    clase::create([
            'name' => 'Análisis y Diseño de Sistemas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-702',
            'UV' => '4',
            'difulcutad' => '39',
        ]);
        
         
    clase::create([
            'name' => 'Contabilidad I',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-721',
            'UV' => '4',
            'difulcutad' => '40',
        ]);
        
         
    clase::create([
            'name' => 'Auditoría Informática',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-903',
            'UV' => '3',
            'difulcutad' => '41',
        ]);
        
         
    clase::create([
            'name' => 'Inteligencia Artificial',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-701',
            'UV' => '4',
            'difulcutad' => '42',
        ]);
        
         
    clase::create([
            'name' => 'Ingeniería del Software',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-802',
            'UV' => '4',
            'difulcutad' => '43',
        ]);
        
         
    clase::create([
            'name' => 'Finanzas Administrativas',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-820',
            'UV' => '4',
            'difulcutad' => '44',
        ]);
        
         
    clase::create([
            'name' => 'Industria del Software',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-902',
            'UV' => '4',
            'difulcutad' => '45',
        ]);
        
         
    clase::create([
            'name' => 'Gerencia Informática',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-904',
            'UV' => '4',
            'difulcutad' => '46',
        ]);
        
         
    clase::create([
            'name' => 'Tópicos Especiales y Avanzados',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-906',
            'UV' => '5',
            'difulcutad' => '47',
        ]);
        
         
    clase::create([
            'name' => 'Economía Digital',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-905',
            'UV' => '5',
            'difulcutad' => '48',
        ]);
        
         
    clase::create([
            'name' => 'Seminario de Investigación',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-115',
            'UV' => '0',
            'difulcutad' => '49',
        ]);
        
         
    clase::create([
            'name' => 'Teoría de la Simulación',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-910',
            'UV' => '3',
            'difulcutad' => '50',
        ]);
        
         
    clase::create([
            'name' => 'Microprocesadores',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-911',
            'UV' => '3',
            'difulcutad' => '51',
        ]);
        
         
    clase::create([
            'name' => 'Liderazgo para el cambio',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-914',
            'UV' => '3',
            'difulcutad' => '52',
        ]);
        
         
    clase::create([
            'name' => 'Sistemas Expertos',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-912',
            'UV' => '3',
            'difulcutad' => '53',
        ]);
        
         
    clase::create([
            'name' => 'Diseño de Compiladores',
            'descripcion' => ' ',
            'departamento' => '1',
            'codigo' => 'IS-913',
            'UV' => '3',
            'difulcutad' => '54',
        ]);

    }
}
