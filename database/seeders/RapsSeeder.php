<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Raps;
use App\Models\Competencia;

class RapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /****
         * codigo 210101005
         *
         */

        $ctg_1_id = Competencia::where("codigo" , '210101005')->first()->id;

        Raps::create([

            'nombre' => 'EVALUAR LA GESTIÓN DEL TALENTO HUMANO TENIENDO EN CUENTA EL DESARROLLO DE LAS FUNCIONES  CON RELACIÓN A METAS ESTABLECIDAS Y TIEMPOS GESTIÓN SEGÚN NIVELES DE RENDIMIENTO A PARTIR DE  NORMAS Y PROCEDIMIENTOS ESTABLECIDOS A NIVEL INTERNO Y EXTERNO SEGÚN  INDICADORES DE GESTIÓN.',
            'competencia_id' => $ctg_1_id
        ]);

        Raps::create([

            'nombre' => 'COORDINAR EL TALENTO HUMANO APOYADO POR TECNOLOGÍAS DE INFORMACIÓN TENIENDO EN CUENTA LA SITUACIÓN DE DISTRIBUCIÓN Y ASIGNACIÓN DE FUNCIONES ESTABLECIDAS EN EL PLAN DE ACTIVIDADES DE ACUERDO CON LOS OBJETIVOS, ESTRATEGIAS, TIEMPOS Y RECURSOS SEGÚN INDICADORES DE GESTIÓN.',
            'competencia_id' => $ctg_1_id
        ]);

        Raps::create([

            'nombre' => 'ANALIZAR LOS RESULTADOS DE LA EVALUACIÓN SEGÚN METAS ORGANIZACIONALES TENIENDO EN CUENTA LAS VARIABLES DE GESTIÓN Y ÁREAS DE RENDIMIENTO IDENTIFICANDO LAS DEBILIDADES Y FORTALEZAS DEL TALENTO HUMANO SEGÚN POLÍTICAS DE GESTIÓN Y NECESIDADES DE LAS ÁREAS Y PROCESOS.',
            'competencia_id' => $ctg_1_id
        ]);

        Raps::create([

            'nombre' => 'REALIZAR EL ENTRENAMIENTO Y EL SEGUIMIENTO DE LA EFECTIVIDAD DEL DESEMPEÑO  DEL TALENTO HUMANO EN EL PUESTO DE TRABAJO, EL ESTILO DE DIRECCIÓN UTILIZADA Y EL CUMPLIMIENTO DE  LOS OBJETIVOS PROPUESTOS EN CADA PROCESO SEGÚN PLANES DE MEJORAMIENTO ESTABLECIDOS POR LA ORGANIZACIÓN.',
            'competencia_id' => $ctg_1_id
        ]);



        /****************
         * codigo 260101007
         *************/


        $ctg_2_id = Competencia::where("codigo" , '260101007')->first()->id;

        Raps::create([

            'nombre' => 'MANEJAR LAS RELACIONES PÚBLICAS CON LOS DIFERENTES ACTORES QUE INTERVIENEN EN EL EVENTO TENIENDO EN CUENTA LOS ASPECTOS DE COMUNICACIÓN, LOGÍSTICA Y GENERACIÓN DE INFORMACIÓN DENTRO DE LAS FECHAS SEÑALADAS Y LA PROGRAMACIÓN ESTABLECIDA SEGÚN EL PROGRAMA DE PUBLICIDAD Y PROMOCIÓN DE LA EMPRESA.',
            'competencia_id' => $ctg_2_id
        ]);

        Raps::create([

            'nombre' => 'ORGANIZAR LA INFORMACIÓN RELACIONADA CON EL DESARROLLO DE LOS EVENTOS FRENTE A LOS RESULTADOS OBTENIDOS VS. LOS OBJETIVOS EMPRESARIALES UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE INFORMACIÓN PARA EL SEGUIMIENTO DE LAS ACTIVIDADES PROGRAMADAS TENIENDO EN CUENTA EL TIPO DE EVENTO SEGÚN LAS POLÍTICAS DE LA ORGANIZACIÓN.',
            'competencia_id' => $ctg_2_id
        ]);

        Raps::create([

            'nombre' => 'REALIZAR CONTRATOS FRENTE A LOS REQUERIMIENTOS DEL EVENTO DE ACUERDO CON LA REVISIÓN DEL CUMPLIMIENTO DE LOS TÉRMINOS DE NEGOCIACIÓN, EL PRESUPUESTO Y LAS NORMAS LEGALES PARA GARANTIZAR LA CALIDAD DEL SERVICIO, SEGÚN LAS POLÍTICAS DE LA ORGANIZACIÓN.',
            'competencia_id' => $ctg_2_id
        ]);



        /***************
         * codigo 260101012
         */


        $ctg_3_id = Competencia::where("codigo" , '260101012')->first()->id;

        Raps::create([

            'nombre' => 'ELABORAR Y REVISAR EL PORTAFOLIO PARA PRODUCTOS, EN FORMA MANUAL O SISTEMATIZADA, TENIENDO EN CUENTA LAS VARIABLES Y EL PROCEDIMIENTO QUE SE SIGUE PARA EL ANÁLISIS DE LAS NECESIDADES DE LOS CLIENTES, EL PRODUCTO O SERVICIO Y LAS TENDENCIAS DEL MERCADO DE ACUERDO CON LA IDENTIDAD CORPORATIVA DE LA EMPRESA Y LA NORMATIVIDAD VIGENTE.',
            'competencia_id' => $ctg_3_id
        ]);

        Raps::create([

            'nombre' => 'ACOPIAR, ANALIZAR, CLASIFICAR Y EVALUAR LA INFORMACIÓN QUE BRINDA EL ANUNCIANTE, DE ACUERDO CON LAS NECESIDADES DE COMUNICACIÓN DEL PRODUCTO O SERVICIO PARA LA ELABORACIÓN ESCRITA DEL BRIEFING DE SU EMPRESA SEGÚN SUS OBJETIVOS DE COMUNICACIÓN.',
            'competencia_id' => $ctg_3_id
        ]);

        Raps::create([

            'nombre' => 'ELABORAR EL BRIEFING ESCRITO FIDEDIGNO DE UN PRODUCTO O SERVICIO FRENTE A LA INFORMACIÓN PRESENTADA POR LA EMPRESA ANUNCIANTE, EN RELACIÓN CON  LOS ANTECEDENTES DEL MERCADO, DEL HISTORIAL DE LA EMPRESA Y DE SU PRODUCTO O SERVICIO, PARA SER CONSULTADO POR LAS AGENCIAS O EL ANUNCIANTE DE ACUERDO  CON LAS NECESIDADES DE LA EMPRESA.',
            'competencia_id' => $ctg_3_id
        ]);


        /***************
         * codigo 260101016
         */


        $ctg_4_id = Competencia::where("codigo" , '260101016')->first()->id;

        Raps::create([

            'nombre' => 'FORMULAR ESTRATEGIAS DE MERCADEO PARA LAS DIFERENTES ÁREAS, TIPOS DE FORMATOS O UNIDADES DE NEGOCIO MEDIANTE LA APLICACIÓN DE TÉCNICAS Y HERRAMIENTAS PARA LA GENERACIÓN DE ESTRATEGIAS A PARTIR DE LOS RESULTADOS DEL DIAGNÓSTICO.',
            'competencia_id' => $ctg_4_id
        ]);

        Raps::create([

            'nombre' => 'REALIZAR DIAGNÓSTICOS CUANTITATIVOS Y CUALITATIVOS TENIENDO EN CUENTA LA COBERTURA Y ENTORNO DEL MERCADO EN LOS PROCESOS DE IDENTIFICACIÓN DE OPORTUNIDADES DE MERCADOS MEDIANTE LA APLICACIÓN DE TÉCNICAS Y PROCEDIMIENTOS DE DIAGNOSTICO Y CON EL APOYO DE SOTFWARE.',
            'competencia_id' => $ctg_4_id
        ]);

        Raps::create([

            'nombre' => 'DEFINIR EL PLAN DE ACCIÓN PARA DIFERENTES TIPOS DE MERCADOS DE ACUERDO CON LA COBERTURA DE MERCADO APLICANDO LAS METODOLOGÍAS PARA SU ELABORACIÓN CON EL APOYO DE SOFTWARE A PARTIR DE LOS OBJETIVOS Y RECURSOS DE LA EMPRESA.',
            'competencia_id' => $ctg_4_id
        ]);

        Raps::create([

            'nombre' => 'ESTABLECER DIFERENTES TIPOS DE INDICADORES Y ESTÁNDARES DE GESTIÓN DE MERCADEO CON EL APOYO DE LAS TECNOLOGÍAS INFORMÁTICAS EN LA DEFINICIÓN DE METAS Y OBJETIVOS DEL PLAN DE MERCADEO APLICANDO PROCESOS, TÉCNICAS Y PROCEDIMIENTOS SEGÚN METAS Y OBJETIVOS DE LA EMPRESA.',
            'competencia_id' => $ctg_4_id
        ]);


        /***************
         * codigo 260101017
         */


        $ctg_5_id = Competencia::where("codigo" , '260101017')->first()->id;

        Raps::create([

            'nombre' => 'ACORDAR LA PAUTA CON LOS MEDIOS DE COMUNICACIÓN DE ACUERDO CON LA DISTRIBUCIÓN DE TIEMPO, FRECUENCIA Y COSTO EN DETERMINADO MEDIO, UTILIZANDO MÉTODOS ESTABLECIDOS PARA LA EVALUACIÓN, CON BASE EN EL ANÁLISIS DE EFECTIVIDAD Y RENTABILIDAD.',
            'competencia_id' => $ctg_5_id
        ]);

        Raps::create([

            'nombre' => 'SELECCIONAR LOS MEDIOS A PAUTAR EN LA CAMPAÑA PUBLICITARIA PARA UN PRODUCTO O SERVICIO ESPECÍFICO, CON BASE EN LAS CARACTERÍSTICAS DE LOS MEDIOS, DISTINGUIENDO SUS VENTAJAS Y DESVENTAJAS.',
            'competencia_id' => $ctg_5_id
        ]);

        Raps::create([

            'nombre' => 'ELABORAR EL CONTRATO CON EL MEDIO TENIENDO EN CUENTA LAS CARACTERÍSTICAS Y CONDICIONES PARA LA CONTRATACIÓN DE LA CAMPAÑA, DE ACUERDO CON LAS CARACTERÍSTICAS A TENER EN CUENTA EN LOS ELEMENTOS DE COMUNICACIÓN SEGÚN EL TIPO DE MEDIO.',
            'competencia_id' => $ctg_5_id
        ]);



        /***************
         * codigo 260101018
         */


        $ctg_6_id = Competencia::where("codigo" , '260101018')->first()->id;

        Raps::create([

            'nombre' => 'RECOLECTAR Y CLASIFICAR INFORMACIÓN DE MANERA SISTEMÁTICA APLICANDO TÉCNICAS DE RECOLECCIÓN MEDIANTE EL USO DE SOFTWARE ESPECIALIZADO DE ACUERDO CON LOS PARÁMETROS ESTABLECIDOS POR LA ORGANIZACIÓN PARA LA CONFORMACIÓN DE BASES DE DATOS.',
            'competencia_id' => $ctg_6_id
        ]);

        Raps::create([

            'nombre' => 'CONSTITUIR EL SISTEMA DE INFORMACIÓN DE MERCADEO TENIENDO EN CUENTA LOS REQUERIMIENTOS DE LAS DIFERENTES ÁREAS DE LA EMPRESA Y LOS ELEMENTOS DETERMINADOS POR ELLA, SEGÚN LOS OBJETIVOS DE LAS ACTIVIDADES DEL PLAN DE MERCADO.',
            'competencia_id' => $ctg_6_id
        ]);

        Raps::create([

            'nombre' => 'MANTENER ACTUALIZADA LA BASE DE DATOS A PARTIR DE LOS INFORMES DE DIFERENCIAS PRESENTADAS ENTRE LA INVESTIGACIÓN DE MERCADOS Y LAS NECESIDADES DE INFORMACIÓN DEL SISTEMA Y SUBSISTEMAS DE MERCADEO DE LA ORGANIZACIÓN, MEDIANTE LA UTILIZACIÓN DE LOS MÉTODOS EXISTENTES PARA LA CAPTURA DE LOS DATOS.',
            'competencia_id' => $ctg_6_id
        ]);


        /***************
         * codigo 260101021
         */


        $ctg_7_id = Competencia::where("codigo" , '260101021')->first()->id;

        Raps::create([

            'nombre' => 'UTILIZAR ESTRATEGIA PARA APOYAR LA PRESENTACIÓN DE LOS PRODUCTOS O SERVICIOS A LOS CLIENTES TENIENDO EN CUENTA CARACTERÍSTICAS, BENEFICIOS Y USOS DE UN PRODUCTO O SERVICIO ESPECÍFICO, SEGÚN PROTOCOLO ESTABLECIDO POR LA EMPRESA.',
            'competencia_id' => $ctg_7_id
        ]);

        Raps::create([

            'nombre' => 'REALIZAR EL PROCESO DE LA VENTA DE PRODUCTOS Y SERVICIOS APLICANDO TÉCNICAS DE ARGUMENTACIÓN Y CIERRE DE VENTAS SIGUIENDO PROCEDIMIENTOS PARA NEGOCIAR UN PRODUCTO O SERVICIO EN UN MERCADO ESPECÍFICO, CONFORME A LAS POLÍTICAS DE VENTA Y LOS TÉRMINOS DE NEGOCIACIÓN.',
            'competencia_id' => $ctg_7_id
        ]);

        Raps::create([

            'nombre' => 'ACORDAR TÉRMINOS DE NEGOCIACIÓN Y CONDICIONES COMERCIALES, PREVIA REVISIÓN DE LAS PARTES DEL CONTRATO ESTRUCTURADO, DE ACUERDO CON LOS PARÁMETROS LEGALES DE NEGOCIACIÓN Y POLÍTICAS Y PROCEDIMIENTOS DE LA EMPRESA.',
            'competencia_id' => $ctg_7_id
        ]);



        /***************
         * codigo 260101024
         */


        $ctg_8_id = Competencia::where("codigo" , '260101024')->first()->id;

        Raps::create([

            'nombre' => 'EVALUAR EL IMPACTO DE LA EXHIBICIÓN TENIENDO EN CUENTA EL FLUJO DE PERSONAS Y LAS ESTRATEGIAS CORPORATIVAS APLICANDO LOS INDICADORES QUE MIDAN LA ACEPTACIÓN DEL PÚBLICO SEGÚN EL NIVEL DE SATISFACCIÓN DE LOS CLIENTES.',
            'competencia_id' => $ctg_8_id
        ]);

        Raps::create([

            'nombre' => 'DISEÑAR LA DISTRIBUCIÓN DEL ESPACIO EN EL ESTABLECIMIENTO TENIENDO EN CUENTA LAS CARACTERÍSTICAS, OBJETIVOS Y TIPO DE NEGOCIO APLICANDO TÉCNICAS DE ANIMACIÓN Y MERCHANDISING EN EL PUNTO DE VENTA SEGÚN LAS SUPERFICIES Y ESTRATEGIAS DE EXHIBICIÓN.',
            'competencia_id' => $ctg_8_id
        ]);

        Raps::create([

            'nombre' => 'PRECISAR EL TIPO DE EXHIBICIÓN EN EL PUNTO DE VENTA, TENIENDO EN CUENTA EL PRODUCTO, LA OCASIÓN DE CONSUMO, SU ROTACIÓN Y EL SEGMENTO DEL MERCADO AL QUE VA DIRIGIDO, A PARTIR DEL PLANOGRAMA APROBADO SEGÚN POLÍTICA COMERCIAL DE LA EMPRESA Y TENDENCIAS DE EXHIBICIÓN DEL MERCADO.',
            'competencia_id' => $ctg_8_id
        ]);

        Raps::create([

            'nombre' => 'DISEÑAR EL STAND Y LOS ESPACIOS DEL EVENTO CONSIDERANDO LOS PASOS A SEGUIR EN SU ELABORACIÓN Y LOS REQUERIMIENTOS UTILIZANDO SOFTWARE APLICADO, SEGÚN EL PLAN DE COMUNICACIÓN Y EL TIPO DE PRODUCTO O SERVICIO.',
            'competencia_id' => $ctg_8_id
        ]);


        /***************
         * codigo 260101025
         */


        $ctg_9_id = Competencia::where("codigo" , '260101025')->first()->id;

        Raps::create([

            'nombre' => 'DISEÑAR Y ELABORAR BOCETOS DE AVISOS E IMÁGENES COMERCIALES PREVIA REVISIÓN DEL STORY-BOARD APLICANDO PROCEDIMIENTOS QUE SIGUE EN DISEÑO DE IMÁGENES CON EL APOYO DE UN SOFTWARE ESPECIAL DE DISEÑO PARA LA ELABORACIÓN DE LAS IMÁGENES DE ILUSTRACIÓN DE UNA HISTORIA.',
            'competencia_id' => $ctg_9_id
        ]);

        Raps::create([

            'nombre' => 'EVALUAR EL MENSAJE REDACTADO FRENTE A LA ESTRATEGIA CREATIVA PARA MEDIR LA SÍNTESIS Y EL IMPACTO NECESARIO PARA SU RECORDACIÓN, POSTERIOR ADHESIÓN Y CAMBIO DE ACTITUD POR PARTE DEL RECEPTOR.',
            'competencia_id' => $ctg_9_id
        ]);

        Raps::create([

            'nombre' => 'REDACTAR TEXTOS ESTABLECIENDO LAS DIFERENCIAS DE CADA MENSAJE SEGÚN EL MEDIO SELECCIONADO, DE ACUERDO CON LAS ORIENTACIONES DEL BREAFING.',
            'competencia_id' => $ctg_9_id
        ]);


        /***************
         * codigo 260101030
         */


        $ctg_10_id = Competencia::where("codigo" , '260101030')->first()->id;

        Raps::create([

            'nombre' => 'PLANEAR LA LOGÍSTICA DE LAS SESIONES DE GRUPO DE ACUERDO CON SU TAMAÑO, SU COMPOSICIÓN Y ESCENARIO, TENIENDO EN CUENTA EL DESARROLLO DE ACTIVIDADES, FRENTE A LAS NECESIDADES DE ESPACIOS, LOCACIONES O EQUIPOS AUDIOVISUALES SEGÚN LOS OBJETIVOS DE LA INVESTIGACIÓN.',
            'competencia_id' => $ctg_10_id
        ]);

        Raps::create([

            'nombre' => 'DIRIGIR LAS SESIONES DE GRUPO EN CADA ETAPA DEL PROCESO PARA EL TIPO O ÁREA DE ESTUDIO DE INVESTIGACIÓN OBJETO DE ESTUDIO, DE ACUERDO CON LAS FORMAS DE PARTICIPACIÓN PROPUESTA Y APLICANDO MÉTODOS DE TRABAJO GRUPAL.',
            'competencia_id' => $ctg_10_id
        ]);

        Raps::create([

            'nombre' => 'DESARROLLAR ENTREVISTAS PRESÉNCIALES Y VIRTUALES APLICANDO EL TIPO DE MÉTODO DE RECOLECCIÓN DE INFORMACIÓN Y LA MODALIDAD DE ENTREVISTA, UTILIZANDO LAS DIFERENTES TECNOLOGÍAS Y MEDIOS DE COMUNICACIÓN, SEGÚN SU POBLACIÓN OBJETO Y LAS NORMAS QUE RIGEN ESTA TÉCNICA DE RECOLECCIÓN DE INFORMACIÓN.',
            'competencia_id' => $ctg_10_id
        ]);


        /***************
         * codigo 260101031
         */


        $ctg_11_id = Competencia::where("codigo" , '260101031')->first()->id;

        Raps::create([

            'nombre' => 'ESTIMAR EL IMPACTO DEL MENSAJE, APLICANDO MÉTODOS DE MEDICIÓN CUALITATIVA, CUANTITATIVA Y LOS INDICADORES DE EVALUACIÓN RELACIONADOS CON LA EFECTIVIDAD DE LOS MENSAJES, SEGÚN NECESIDADES PUBLICITARIAS DE LA EMPRESA, PARA DETERMINAR EL TOP OF MIND DEL CONSUMIDOR FRENTE A LOS PRODUCTOS O SERVICIOS.',
            'competencia_id' => $ctg_11_id
        ]);

        Raps::create([

            'nombre' => 'DETERMINAR LA UTILIDAD ECONÓMICA DE LA CAMPAÑA, A PARTIR DE LA COBERTURA ALCANZADA DE LOS MEDIOS Y LOS COSTOS DE INVERSIÓN PUBLICITARIA, DE ACUERDO CON LA PARTICIPACIÓN E INCREMENTO DE LAS VENTAS, EMPLEANDO SOFTWARE ESPECIALIZADO CON EL FIN DE PUNTUALIZAR SU RENTABILIDAD Y ALCANZAR LOS OBJETIVOS DE LA EMPRESA.',
            'competencia_id' => $ctg_11_id
        ]);

        Raps::create([

            'nombre' => 'DESARROLLAR PROCESOS PARA LA MEDICIÓN DEL GRADO DE SATISFACCIÓN Y LEALTAD DE LOS CLIENTES A PARTIR DE LOS SISTEMAS DE SEGUIMIENTO Y CONTROL DE LOS MENSAJES, DE ACUERDO CON SU FRECUENCIA DE TRANSMISIÓN Y EXPOSICIÓN, PARA GARANTIZAR LA EFECTIVIDAD DE LA CAMPAÑA SEGÚN OBJETIVOS PROPUESTOS POR LA EMPRESA.',
            'competencia_id' => $ctg_11_id
        ]);



        /***************
         * codigo 260101033
         *
         */


        $ctg_12_id = Competencia::where("codigo" , '260101033')->
                                  where("nombre" , 'like' , 'CONTACTAR%')
                                  ->first()->id;

        Raps::create([

            'nombre' => 'REALIZAR LA PROSPECTACIÓN DE CLIENTES TENIENDO EN CUENTA FACTORES PERSONALES Y SOCIALES REQUERIDOS PARA LA SELECCIÓN DE LOS CLIENTES UTILIZANDO SISTEMA MANUAL O SISTEMATIZADO CON EL FIN DE DETERMINAR QUIENES SON Y QUE NECESIDADES TIENEN DE ACUERDO CON EL PRODUCTO O SERVICIO OFRECIDO Y LOS OBJETIVOS DE MERCADO.',
            'competencia_id' => $ctg_12_id
        ]);

        Raps::create([

            'nombre' => 'PREPARAR E IDENTIFICAR LOS ELEMENTOS COMPONENTES DE UNA OFERTA O PROPUESTA DE VENTAS DE PRODUCTOS Y SERVICIOS TENIENDO EN CUENTA LOS RESULTADOS DE LA INVESTIGACIÓN DE MERCADOS, LAS ESTRATEGIAS DE MERCADO Y LA MEDICIÓN DE	LA OFERTA VERSUS INDICADORES DE IMPACTO DE LA MISMA CON EL APOYO DE SOFTWARE Y MEDIOS TECNOLÓGICOS ESTABLECIDOS POR LA ORGANIZACIÓN.',
            'competencia_id' => $ctg_12_id
        ]);


        /***************
         * codigo 260101035
         */


        $ctg_13_id = Competencia::where("codigo" , '260101035')->first()->id;

        Raps::create([

            'nombre' => 'ELABORAR Y REVISAR EL PLAN DE MEDIOS Y VERIFICAR LOS DIVERSOS COMPONENTES DEL PLAN MEDIANTE LA IDENTIFICACIÓN DE LOS FACTORES QUE LO INTEGRAN Y LOS ELEMENTOS QUE COMPONEN LA PLATAFORMA DE COMUNICACIÓN DE UNA CAMPAÑA PUBLICITARIA.',
            'competencia_id' => $ctg_13_id
        ]);

        Raps::create([

            'nombre' => 'ELABORAR EL PLAN DE MEDIOS SIGUIENDO PROCEDIMIENTOS Y VERIFICANDO COMPONENTES DE LOS FACTORES QUE DEBE CONSIDERAR UN PLAN DE MEDIOS, TENIENDO EN CUENTA EL ALCANCE Y TIPO DE MEDIOS, PARA GARANTIZAR LA EFICIENCIA DE LA INVERSIÓN PUBLICITARIA.',
            'competencia_id' => $ctg_13_id
        ]);

        Raps::create([

            'nombre' => 'DESARROLLAR ESTRATEGIAS DE COMUNICACIÓN DE UNA CAMPAÑA, SEGÚN PRODUCTO, PÚBLICO OBJETIVO, PRESUPUESTO Y OBJETIVOS DADOS EN EL BRIEFING A PARTIR DE LOS ELEMENTOS QUE COMPONEN LA PLATAFORMA DE COMUNICACIÓN DE UNA CAMPAÑA PUBLICITARIA, PARA CUMPLIR CON LOS OBJETIVOS DEL PLAN DE MERCADEO.',
            'competencia_id' => $ctg_13_id
        ]);





        /***************
         * codigo 260101033
         *
         */


        $ctc_1_id = Competencia::where("codigo" , '260101033')->
        where("nombre" , 'like' , 'Prospectar%')
            ->first()->id;

        Raps::create([

            'nombre' => 'DIAGNOSTICAR CLIENTES DE INTERÉS DE ACUERDO CON EL MERCADO OBJETIVO DE LA ORGANIZACIÓN.',
            'competencia_id' => $ctc_1_id
        ]);


        Raps::create([

            'nombre' => 'PRESENTAR PROPUESTA COMERCIAL DE ACUERDO CON PERFIL DEL CLIENTE Y LINEAMIENTOS DEL PLAN DE MERCADEO.',
            'competencia_id' => $ctc_1_id
        ]);


        Raps::create([

            'nombre' => 'PERFILAR CLIENTES DE ACUERDO CON VARIABLES DE SEGMENTACIÓN.',
            'competencia_id' => $ctc_1_id
        ]);


        /***************
         * codigo 260101074
         *
         */


        $ctc_2_id = Competencia::where("codigo" , '260101074')
            ->first()->id;

        Raps::create([

            'nombre' => 'CARACTERIZAR LA AUDIENCIA TENIENDO EN CUENTA REQUERIMIENTOS DEL PLAN DE MERCADEO.',
            'competencia_id' => $ctc_2_id
        ]);


        Raps::create([

            'nombre' => 'PROMOCIONAR CONTENIDO DE ACUERDO CON PLAN DE MERCADEO DIGITAL.',
            'competencia_id' => $ctc_2_id
        ]);


        Raps::create([

            'nombre' => 'INTERACTUAR CON LA AUDIENCIA ACORDE CON PROTOCOLOS Y REQUERIMIENTOS DE AUDIENCIA.',
            'competencia_id' => $ctc_2_id
        ]);


        /***************
         * codigo 291301122
         *
         */


        $ctc_3_id = Competencia::where("codigo" , '291301122')
            ->first()->id;

        Raps::create([

            'nombre' => 'PROPONER EL CONCEPTO CREATIVO BÁSICO DE ACUERDO CON REQUERIMIENTOS.',
            'competencia_id' => $ctc_3_id
        ]);


        Raps::create([

            'nombre' => 'PREPARAR CONTENIDO BÁSICO DE ACUERDO CON EL ALCANCE DE LA PIEZA Y REQUERIMIENTOS DEL CLIENTE.',
            'competencia_id' => $ctc_3_id
        ]);


        Raps::create([

            'nombre' => 'ELABORAR PIEZA GRÁFICA BÁSICA TENIENDO EN CUENTA LOS LINEAMIENTOS DE MARCA, LÍNEA Y FINALIDAD DEL MENSAJE.',
            'competencia_id' => $ctc_3_id
        ]);




    }
}
