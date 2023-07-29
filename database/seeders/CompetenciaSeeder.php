<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programa;
use App\Models\Competencia;


class CompetenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seleccionar un arreglo con los id de los programas
        $id_progrs = Programa::select('id')->get()->toArray();


        //Competencias del tecnico

        Competencia::create([
            'codigo' => '260101033',
            'nombre' => 'Prospectar clientes de acuerdo con los segmentos objetivo y estrategia de ventas',
            'programa_id' => $id_progrs[0]["id"]
        ]);

        Competencia::create(
            [
                'codigo' => '260101074',
                'nombre' => 'Gestionar comunidades virtuales de acuerdo con técnicas de relaciones públicas y tipo de negocio.',
                'programa_id' => $id_progrs[0]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '291301122',
                'nombre' => 'Diagramar piezas gráficas de acuerdo con métodos de diseño y tipo de proyecto.',
                'programa_id' => $id_progrs[0]["id"]
            ]
        );

        //Competencias del tecnologo
        Competencia::create(
            [
                'codigo' => '210101005',
                'nombre' => 'DIRIGIR EL TALENTO HUMANO SEGÚN NECESIDADES DE LA ORGANIZACIÓN',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101007',
                'nombre' => 'MANEJAR CONTACTOS COMERCIALES DE ACUERDO CON LA ACTIVIDAD DE MERCADEO.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101012',
                'nombre' => 'PREPARAR LOS ELEMENTOS DE APOYO PARA EL DISEÑO DEL MENSAJE Y LA REALIZACIÓN DE LA CAMPAÑA PUBLICITARIA CON BASE EN LOS OBJETIVOS DE COMUNICACIÓN Y RECURSOS DE LA EMPRESA.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101016',
                'nombre' => 'PLANEAR ACTIVIDADES DE MERCADEO QUE RESPONDAN A LAS NECESIDADES Y EXPECTATIVAS DE LOS CLIENTES Y A LOS OBJETIVOS DE LA EMPRESA.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );


        Competencia::create(
            [
                'codigo' => '260101017',
                'nombre' => 'ESTABLECER LA ESTRUCTURA DE LA CAMPAÑA SEGÚN OBJETIVOS DE LA COMUNICACIÓN Y ESTRATEGIAS DE MERCADEO.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101018',
                'nombre' => 'IMPLEMENTAR EL SISTEMA DE INFORMACIÓN DE MERCADOS DE ACUERDO CON LAS NECESIDADES DE INFORMACIÓN DE LAS SUBÁREAS Y LOS OBJETIVOS DE LA EMPRESA.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101021',
                'nombre' => 'NEGOCIAR PRODUCTOS Y SERVICIOS SEGÚN CONDICIONES DEL MERCADO Y POLÍTICAS DE LA EMPRESA.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101024',
                'nombre' => 'GESTIONAR LAS SUPERFICIES EN LOS PUNTOS DE VENTA SEGÚN ESTRATEGIAS DE EXHIBICIÓN.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101025',
                'nombre' => 'CREAR PIEZAS DE COMUNICACIÓN CON BASE EN LA PROPUESTA DE COMUNICACIÓN DEL PRODUCTO O SERVICIO.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101030',
                'nombre' => 'DESARROLLAR ESTUDIOS CUALITATIVOS SEGÚN MODELO METODOLÓGICO DE INVESTIGACIÓN, E INSTRUMENTOS DE RECOLECCIÓN.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101031',
                'nombre' => 'MEDIR LA EFECTIVIDAD DE LOS MENSAJES PUBLICITARIOS APLICANDO LAS TÉCNICAS E INSTRUMENTOS DE MEDICIÓN.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101033',
                'nombre' => 'CONTACTAR CLIENTES DE ACUERDO CON SUS NECESIDADES Y POLÍTICAS COMERCIALES DE LA EMPRESA.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

        Competencia::create(
            [
                'codigo' => '260101035',
                'nombre' => 'DISEÑAR ESTRATEGIAS DE COMUNICACIÓN CON BASE EN LAS CARACTERÍSTICAS DEL PRODUCTO O SERVICIO Y EL MERCADO.',
                'programa_id' => $id_progrs[1]["id"]
            ]
        );

    }
}
