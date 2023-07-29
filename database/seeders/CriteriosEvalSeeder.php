<?php

namespace Database\Seeders;


use App\Models\Competencia;
use App\Models\CriteriosEval;
use App\Models\Raps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CriteriosEvalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seleccionar todos los RAPS por competencia

        $raps_210101005 = Competencia::where("codigo", '210101005')->first()->raps;
        foreach ($raps_210101005 as $rap) {
            if (Str::startsWith($rap->nombre, 'EVALUAR LA GESTIÓN DEL TALENTO HUMANO')) {
                CriteriosEval::create([
                    'nombre' => 'INTERPRETA LOS RESULTADOS DE LAS EVALUACIONES DE DESEMPEÑO DE ACUERDO CON LO ESTÁNDARES Y NORMAS DE CALIDAD E INDICADORES DE GESTIÓN EN LAS DIFERENTES TAREAS, PROCESOS Y PROCEDIMIENTOS ANALIZANDO LAS VARIABLES DE MEDICIÓN DEL RENDIMIENTO DEL TALENTO HUMANO',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'COORDINAR EL TALENTO HUMANO')) {
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA LAS NECESIDADES DE RECURSOS HUMANOS REQUERIDA EN LOS PROCESOS EMPRESARIALES A PARTIR DE LAS FUNCIONES DE LOS PROCESOS DE LA CADENA DE  ABASTECIMIENTO DETERMINADOS EN LOS PERFILES LABORALES NECESARIOS PARA CADA PROCESO O FUNCIÓN EN LA ORGANIZACIÓN TENIENDO EN CUENTA LAS CAPACIDADES COGNITIVAS, PROCEDIMENTALES Y ACTITUDINALES NECESARIAS PARA CADA CARGO Y FUNCIÓN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'INTERPRETA LAS POLÍTICAS DE CONTRATACIÓN DE PERSONAL EN LA ORGANIZACIÓN, LOS CRITERIOS PAR LA ASIGNACIÓN DE SALARIOS, PLANES DE ESTÍMULOS Y RECOMPENSAS PARA EL RECURSO HUMANO SEGÚN LAS CARACTERÍSTICAS PRINCIPALES DE LOS DIFERENTES ENFOQUES EN LA ADMINISTRACIÓN DE PERSONAL.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ANALIZAR LOS RESULTADOS')) {
                CriteriosEval::create([
                    'nombre' => 'GENERA IDEAS PARA INNOVAR Y SOLUCIONAR PROBLEMAS EN LA ORGANIZACIÓN MEDIANTE EL FOMENTO DEL TRABAJO EN EQUIPO COMO ESTRATEGIA DE INTERACCIÓN GRUPAL E INTERPERSONAL PARA INCREMENTAR LA PRODUCTIVIDAD DE ACUERDO CON LAS NORMAS DE SEGURIDAD Y POLÍTICAS ORGANIZACIONALES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA LAS ÁREAS DE RENDIMIENTO DEL RECURSO HUMANO Y LAS CARACTERÍSTICAS ACTITUDINALE SUSCEPTIBLES DE SER EVALUADAS PARA EL DISEÑO DE LAS PRUEBAS OBJETIVAS Y PROYECTIVAS UTILIZADAS EN LA ORGANIZACIÓN QUE PERMITAN MONITOREAR Y HACER SEGUIMIENTO DE ACUERDO CON LAS ACTIVIDADES PROGRAMADAS.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'REALIZAR EL ENTRENAMIENTO')) {
                CriteriosEval::create([
                    'nombre' => 'PLANTEA PLANES Y PROGRAMAS DE ENTRENAMIENTO Y CAPACITACIÓN DE ACUERDO CON LA NECESIDADES DE DESEMPEÑO DE ACUERDO CON EL DIAGNOSTICO DE LAS NECESIDADES DE CAPACITACIÓN Y ENTRENAMIENTO DE LA FUERZA LABORAL Y LOS PRINCIPIOS Y VALORES DE LA ORGANIZACIÓN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PLANIFICA LAS ACTIVIDADES INHERENTES A LOS CARGOS, DURANTE UN PERIODO DE TIEMPO DADO MEDIANTE EL USO DEL DIAGRAMA DE GANTT Y DE LOS TABLEROS DE REGISTRO DE ACUERDO CON LAS RESPONSABILIDADES INDIVIDUALES O GRUPALES.',
                    'rap_id' => $rap->id
                ]);
            }

        }

        $raps_260101007 = Competencia::where("codigo", '260101007')->first()->raps;
        foreach ($raps_260101007 as $rap) {
            if (Str::startsWith($rap->nombre, 'MANEJAR LAS RELACIONES PÚBLICAS')) {
                CriteriosEval::create([
                    'nombre' => 'PROGRAMA EVENTOS COMERCIALES DE ACUERDO CON LA DISPONIBILIDAD DE TIEMPO, A PROPÓSITOS RESULTADOS DE LAS ACTIVIDADES DE RELACIONES PÚBLICAS CON LOS CLIENTES TENIENDO EN CUENTA LOS ASPECTOS DE COMUNICACIÓN, LOGÍSTICA Y GENERACIÓN DE INFORMACIÓN DENTRO DE LAS FECHAS SEÑALADAS Y LA PROGRAMACIÓN ESTABLECIDA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DISEÑA LA CAMPAÑA DE DIFUSIÓN DEL EVENTO, CON BASE EN EL PROGRAMA DE PUBLICIDAD Y DE PROMOCIÓN DE LA EMPRESA ENVIANDO INFORMACIÓN A LOS MEDIOS Y A LA OFICINA DE PRENSA SOBRE LOS DETALLES DEL STAND Y EL MATERIAL INFORMATIVO Y FOTOGRÁFICO DE ACUERDO CON EL OBJETIVO DEL EVENTO SEGÚN EL PRESUPUESTO ASIGNADO POR LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ORGANIZAR LA INFORMACIÓN RELACIONADA')) {
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA Y ORGANIZA LA INFORMACIÓN RELACIONADA CON EL DESARROLLO DE LOS EVENTOS ELABORANDO DIRECTORIOS Y BASES DE DATOS SOBRE LOS CLIENTES, PROVEEDORES, DISTRIBUIDORES, PONENTES, EXPOSITORES Y ORGANIZADORES UTILIZANDO HERRAMIENTAS TECNOLÓGICAS DE INFORMACIÓN PARA EL SEGUIMIENTO DE LAS ACTIVIDADES PROGRAMADAS Y PARA ENVIAR LOS DOCUMENTO DE MEMORIAS AL FINALIZAR EL EVENTO.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'REALIZAR CONTRATOS FRENTE A LOS REQUERIMIENTOS')) {
                CriteriosEval::create([
                    'nombre' => 'ANALIZA LOS TÉRMINOS DE CONTRATACIÓN DE LOS ESPACIOS Y MEDIOS DE APOYO DE ACUERDO CON LAS EXPECTATIVAS DE CANTIDAD, CALIDAD, COSTO, TIEMPO Y DISPONIBILIDAD FÍSICA, FIJANDO LOS PROCEDIMIENTOS DEL CONTRATO DE LOS PONENTES DE ACUERDO CON LOS SERVICIOS GENERALES REQUERIDOS Y LOS MEDIOS DE COMUNICACIÓN QUE CUBRIRÁN EL EVENTO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'REALIZA CONTRATOS FRENTE A LOS REQUERIMIENTOS DE UN EVENTO DE ACUERDO CON LA REVISIÓN DE CUMPLIMIENTO DE LOS TÉRMINOS DE NEGOCIACIÓN, EL PRESUPUESTO Y LAS NORMAS LEGALES PARA GARANTIZAR LA CALIDAD DEL SERVICIO, SEGÚN LAS POLÍTICAS DE LA ORGANIZACIÓN.',
                    'rap_id' => $rap->id
                ]);
            }
        }

        $raps_260101012 = Competencia::where("codigo", '260101012')->first()->raps;
        foreach ($raps_260101012 as $rap) {
            if (Str::startsWith($rap->nombre, 'ELABORAR Y REVISAR EL PORTAFOLIO PARA PRODUCTOS')) {
                CriteriosEval::create([
                    'nombre' => 'REALIZA EL PORTAFOLIO DE PRODUCTOS O SERVICIOS A PARTIR DE UN DISEÑO GRÁFICO Y CREATIVO VISUALMENTE QUE CONTIENE LA IMAGEN CORPORATIVA DE LA EMPRESA, SU HISTORIA COMERCIAL EN SU MERCADO, OBJETIVOS Y ORGANIGRAMA, PRECISANDO LA FICHA TÉCNICA DE LOS PRODUCTOS, O DESCRIPCIÓN DE LOS SERVICIOS OFRECIDOS, DE ACUERDO AL SEGMENTO DE MERCADO.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ACOPIAR, ANALIZAR, CLASIFICAR Y EVALUAR')) {
                CriteriosEval::create([
                    'nombre' => 'ANALIZA Y REGISTRA LAS VARIABLES DEL MIX DEL MERCADO, INCLUYENDO EL CICLO DE VIDA DE PRODUCTO, LAS CARACTERÍSTICAS DEL CONSUMIDOR Y LA INVERSIÓN PUBLICITARIA DE ACUERDO CON LA DISTRIBUCIÓN DEL PRESUPUESTO Y LOS RESULTADOS OBTENIDOS EN ACTIVIDADES ANTERIORES DE COMUNICACIÓN COMERCIAL.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA, ANALIZA Y DESCRIBE LAS TENDENCIAS DEL MERCADO Y LAS NECESIDADES DE LOS CLIENTES TENIENDO EN CUENTA SUS CARACTERÍSTICAS SOCIO-DEMOGRÁFICAS, HÁBITOS DE COMPRA, ESTILO DE VIDA, SEGMENTOS, NIVEL DE SATISFACCIÓN Y GRADO DE FIDELIDAD.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ELABORAR EL BRIEFING ESCRITO')) {
                CriteriosEval::create([
                    'nombre' => 'ELABORA EL BRIEFING A PARTIR DE LA REDACCIÓN DE UN INFORME SINTÉTICO, EFICAZ, CLARO COMPLETO PARA SER PRESENTADO A LA AGENCIA QUE VA A DESARROLLAR LA CAMPAÑA TENIENDO EN CUENTA LOS OBJETIVOS Y LA ESTRATEGIA DE PUBLICIDAD PROPUESTOS POR LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101016 = Competencia::where("codigo", '260101016')->first()->raps;
        foreach ($raps_260101016 as $rap) {
            if (Str::startsWith($rap->nombre, 'FORMULAR ESTRATEGIAS DE MERCADEO')) {
                CriteriosEval::create([
                    'nombre' => 'PLANTEA ACCIONES DE MERCADEO PARA LAS DIFERENTES ÁREAS, TIPOS DE FORMATOS O UNIDADES DE NEGOCIO A PARTIR DE LOS RESULTADOS DEL DIAGNOSTICO, CON BASE EN HERRAMIENTAS Y  TÉCNICAS PARA EL DISEÑO DE ESTRATEGIAS.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'REALIZAR DIAGNÓSTICOS CUANTITATIVOS Y CUALITATIVOS')) {
                CriteriosEval::create([
                    'nombre' => 'RECOGE INFORMACIÓN DEL MERCADO PARTIR DE DATOS HISTÓRICOS Y DE LAS VARIABLES INTERNAS Y EXTERNAS QUE AFECTAN A LA ORGANIZACIÓN Y AL ENTORNO, APLICANDO TÉCNICAS DE RECOLECCIÓN DE INFORMACIÓN SECUNDARIA DE ACUERDO CON LOS ASPECTOS OBJETO DE ANÁLISIS.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DEFINIR EL PLAN DE ACCIÓN PARA DIFERENTES TIPOS')) {
                CriteriosEval::create([
                    'nombre' => 'RELACIONA VARIABLES DE MERCADEO QUE PLANTEEN RESULTADOS MEDIBLES, MEDIANTE LA APLICACIÓN DE RAZONES Y PROPORCIONES Y DE ACUERDO CON OBJETIVOS Y METAS DE MERCADEO ESTABLECIDAS EN EL PLAN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'ELABORA PLANES ESTRATÉGICOS PARA LAS DIFERENTES ACCIONES DE MERCADEO CON EL USO DE MATRICES ESTRATÉGICAS Y CON EL APOYO DE SOFTWARE A PARTIR DE LOS OBJETIVOS Y POLÍTICAS DE LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA RECURSOS PARA LA EJECUCIÓN DEL PLAN UTILIZANDO TÉCNICAS Y HERRAMIENTAS PARA LA...',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ESTABLECER DIFERENTES TIPOS DE INDICADORES')) {
                CriteriosEval::create([
                    'nombre' => 'EVALÚA LA INFORMACIÓN DESDE DIFERENTES PERSPECTIVAS APLICANDO LAS METODOLOGÍAS, TÉCNICAS Y HERRAMIENTAS DE DIAGNOSTICO PARA LA IDENTIFICACIÓN Y EVALUACIÓN DE SITUACIONES DEL MERCADO DE ACUERDO CON LOS OBJETIVOS DE LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA VARIABLES DE MERCADEO Y DE LA EMPRESA QUE ARROJEN INFORMACIÓN RELACIONADA CON EL FIN DE ESTABLECER INDICADORES Y ESTÁNDARES DE GESTIÓN DE LAS ACCIONES PARA EVALUAR LOS RESULTADOS PROPUESTOS EN EL PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101017 = Competencia::where("codigo", '260101017')->first()->raps;
        foreach ($raps_260101017 as $rap) {
            if (Str::startsWith($rap->nombre, 'ACORDAR LA PAUTA CON LOS MEDIOS')) {
                CriteriosEval::create([
                    'nombre' => 'DETERMINA VARIANTES DE MEDIDA DE ESPACIOS Y MEDIOS CON LOS QUE SE CUENTA PARA REALIZAR LA ESTRATEGIA DE COMUNICACIÓN DE ACUERDO CON TAMAÑO DE LA AUDIENCIA Y LAS CARACTERÍSTICAS SOCIO-DEMOGRÁFICAS Y PSICOGRÁFICAS DEL PÚBLICO OBJETIVO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'ANALIZA LA PAUTA UTILIZANDO LAS TÉCNICAS Y MÉTODOS ESTABLECIDOS PARA FIJAR LA CANTIDAD DE IMPRESIONES Y VISUALIZACIONES O LA CANTIDAD DE VECES QUE EL MENSAJE VA SER MOSTRADO EN EL MEDIO.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ELABORAR EL CONTRATO CON EL MEDIO TENIENDO')) {
                CriteriosEval::create([
                    'nombre' => 'ELABORA LA CONTRATACIÓN DE PAUTA PARA LA CAMPAÑA, TENIENDO EN CUENTA ASPECTOS LEGALES Y SOCIALES, SEGÚN FORMATOS COMERCIALES QUE SE AJUSTAN AL MENSAJE Y A LOS OBJETIVOS DE…',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'SELECCIONAR LOS MEDIOS A PAUTAR EN LA ')) {
                CriteriosEval::create([
                    'nombre' => 'SELECCIONA LOS MEDIOS EN QUE SE PAUTA UNA CAMPAÑA PUBLICITARIA PARA UN PRODUCTO O SERVICIO ESPECÍFICO, CON BASE EN LAS CARACTERÍSTICAS DE LOS MEDIOS, DISTINGUIENDO SUS VENTAJAS Y DESVENTAJAS.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DETERMINA EN LA PAUTA LA COMBINACIÓN DE MEDIOS QUE MEJOR APORTE HAGAN AL CUMPLIMIENTO DE LA ESTRATEGIA CREATIVA DE ACUERDO CON LA DISTRIBUCIÓN DEL PRESUPUESTO COSTO DE LA PAUTA, ANALIZANDO EFECTIVIDAD Y FRECUENCIA DEL MENSAJE.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101018 = Competencia::where("codigo", '260101018')->first()->raps;
        foreach ($raps_260101018 as $rap) {
            if (Str::startsWith($rap->nombre, 'RECOLECTAR Y CLASIFICAR INFORMACIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'CAPTURA, DEPURA Y HOMOGENIZA DATOS DE MANERA SISTEMÁTICA, MEDIANTE LA UTILIZACIÓN DE SISTEMAS DE RECOLECCIÓN DE INFORMACIÓN Y DIAGNÓSTICO PREVIO DE ACUERDO CON LOS ESTÁNDARES ESTABLECIDOS, PARA LUEGO PROCEDER A SU NORMALIZACIÓN CONSIDERANDO LOS DATOS INTERNOS Y EXTERNOS EN LA ESTRUCTURA DEL SIM DE LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'RECOLECTA ANALIZA Y PROCESA LOS DATOS DE LOS REGISTROS INTERNOS O DE SERVICIOS EXTERNO  DE INFORMACIÓN MEDIANTE PAQUETES ESTADÍSTICOS Y LUEGO VERIFICA QUE LOS REGISTROS  CONTENGAN CAMPO CON LA FECHA EN LA CUAL EL REGISTRO FUE INCORPORADO A LA BASE DE DATOS DE MERCADEO (BDM) DE LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'CONSTITUIR EL SISTEMA DE INFORMACIÓN DE MERCADEO')) {
                CriteriosEval::create([
                    'nombre' => 'ESTRUCTURA LAS BASES DE DATOS CON GUIONES PARA TELEMERCADEO SEGÚN EL MEDIO A UTILIZAR.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'REGISTRA LA INFORMACIÓN EN TABLAS Y CUADROS PARA OBTENER NUEVA INFORMACIÓN REQUERIDA POR EL ÁREA DE MERCADEO Y LAS DEMÁS ÁREAS DE LA EMPRESA, DESDE DIFERENTES PERSPECTIVAS DE LA ORGANIZACIÓN.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'MANTENER ACTUALIZADA LA BASE DE DATOS A PARTIR')) {
                CriteriosEval::create([
                    'nombre' => 'ESTABLECE PROCEDIMIENTOS DE ALERTA PARA IDENTIFICAR EL TIEMPO DE ACTUALIZACIÓN O ELIMINACIÓN DE DATOS PERIÓDICAMENTE, DE ACUERDO CON EL TIPO DE REGISTRO Y A TRAVÉS DE LOS DIVERSOS MEDIOS DE COMUNICACIÓN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'MANEJA Y MANTIENE LA INFORMACIÓN DE LAS BASES DE DATOS EN FORMA ORGANIZADA BAJO LOS PARÁMETROS DE SEGURIDAD, APLICANDO LAS TÉCNICAS Y TECNOLOGÍA EXISTENTES PARA TAL FIN, CATALOGANDO LA INFORMACIÓN PARA EL ENVÍO DE COMUNICACIONES A CLIENTES O USUARIOS, ARCHIVANDO SUS DATOS PARA LA IDENTIFICACIÓN DE CLIENTES ACTUALES Y POTENCIALES DE LOS BIENES Y SERVICIOS DE LA ORGANIZACIÓN.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101021 = Competencia::where("codigo", '260101021')->first()->raps;
        foreach ($raps_260101021 as $rap) {
            if (Str::startsWith($rap->nombre, 'UTILIZAR ESTRATEGIA PARA APOYAR LA PRESENTACIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'PREPARA  ESTRATEGIAS  DE RESENTACIÓN  DE PRODUCTOS Y SERVICIOS ACUDIENDO DEMOSTRACIONES,  MUESTRAS,  DEGUSTACIONES  Y EXHIBICIONES. ',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'REALIZAR EL PROCESO DE LA VENTA DE PRODUCTOS')) {
                CriteriosEval::create([
                    'nombre' => 'PRESENTA Y ARGUMENTA A LOS CLIENTES LOS BENEFICIOS Y CARACTERÍSTICAS DE LOS PRODUCTOS Y SERVICIOS APOYADO CON EL USO DE CATÁLOGOS, MANUALES, PROGRAMAS O NAVEGADORES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'INTERPRETA MOTIVACIÓN, INTERÉS Y DECISIÓN DE COMPRA POR PARTE DEL CLIENTE',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'APLICA ESTRATEGIAS DE VENTA Y NEGOCIACIÓN APOYADO EN MEDIOS DE COMUNICACIÓN ESTABLECIDOS POR LA ORGANIZACIÓN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'MANEJA SITUACIONES EMBARAZOSAS FRENTE A LAS PREGUNTAS Y OBJECIONES DEL CLIENTE. ',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ACORDAR TÉRMINOS DE NEGOCIACIÓN Y CONDICIONES COMERCIALES')) {
                CriteriosEval::create([
                    'nombre' => 'INFORMA A LOS CLIENTES SOBRE DISPONIBILIDAD, CONDICIONES DE ENTREGA, GARANTÍAS Y SERVICIO POSTVENTA PARA LOS PRODUCTOS ADQUIRIDOS.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DETERMINA CONDICIONES DE INTERMEDIACIÓN ENTRE PRODUCTORES, PROVEEDORES, DISTRIBUIDORES Y CLIENTES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PLANTEA CONDICIONES COMERCIALES Y TÉRMINOS DE NEGOCIACIÓN AL CLIENTE DE ACUERDO CON POLÍTICAS Y MARCO LEGAL.',
                    'rap_id' => $rap->id
                ]);
            }
        }

        $raps_260101024 = Competencia::where("codigo", '260101024')->first()->raps;
        foreach ($raps_260101024 as $rap) {
            if (Str::startsWith($rap->nombre, 'EVALUAR EL IMPACTO DE LA EXHIBICIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'EXHIBE EL PRODUCTO EN EL PUNTO DE VENTA TENIDO EN CUENTA LA EVALUACIÓN DE LOS INTERESES SENTIMIENTOS Y EXPECTATIVAS DE LOS CLIENTES, UTILIZANDO TÉCNICAS DE ANIMACIÓN, ELEMENTOS DE APOYO VISUAL, MATERIAL P.O.P Y DE COMUNICACIÓN, SEGÚN ESTRATEGIAS DE EXHIBICIÓN COMERCIAL.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DISEÑAR LA DISTRIBUCIÓN DEL ESPACIO EN EL ESTABLECIMIENTO')) {
                CriteriosEval::create([
                    'nombre' => 'REALIZA PLANOGRAMAS, DISEÑOS DE VITRINAS Y SITIOS DE EXHIBICIÓN, APLICANDO LAS TÉCNICAS PROPIAS DE EXHIBICIÓN Y VITRINISMO, DE ACUERDO CON  LA TEMPORADA, LOS OBJETIVOS DE EXHIBICIÓN  Y EL TIPO DE MERCHANDISING',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'PRECISAR EL TIPO DE EXHIBICIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'ESTABLECE LAS EXHIBICIONES DE ACUERDO CON LA POLÍTICA COMERCIAL Y LAS TENDENCIAS DE EXHIBICIÓN, TENIENDO EN CUENTA EL TIPO DE PRODUCTO, LA OCASIÓN DE CONSUMO, LA ROTACIÓN Y EL SEGMENTO DE CLIENTES.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DISEÑAR EL STAND Y LOS ESPACIOS DEL EVENTO')) {
                CriteriosEval::create([
                    'nombre' => 'REALIZA BOCETOS Y MAPAS SOBRE DISTRIBUCIÓN DE ESPACIOS PARA MONTAJE DE STANDS CONSIDERANDO LAS ÁREAS DE USO Y FLUJO DE PERSONAS, BIENES Y EQUIPOS, Y FACTORES COMO LA MÚSICA, CALOR, VOLUMEN Y FORMAS QUE DESTAQUEN LA IMAGEN DE LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA LOS PASOS A SEGUIR PARA EL MONTAJE DEL STAND EN UN EVENTO, INCLUYENDO, SU ARQUITECTURA EN PUNTO DE VENTA, LAS ENTRADAS Y SALIDAS DEL ESTABLECIMIENTO, EL ACCESO AL ÁREA DE VENTAS Y LAS ÁREAS DE CIRCULACIÓN, DE ACUERDO CON LA DESCRIPCIÓN Y DEFINICIÓN DE MATERIALES REQUERIDOS.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101025 = Competencia::where("codigo", '260101025')->first()->raps;
        foreach ($raps_260101025 as $rap) {
            if (Str::startsWith($rap->nombre, 'DISEÑAR Y ELABORAR BOCETOS DE AVISOS')) {
                CriteriosEval::create([
                    'nombre' => 'ELABORA BOCETOS APLICANDO LAS TÉCNICAS DE DIBUJO Y DESCRIBIENDO LOS DIFERENTES ELEMENTOS REFLEJANDO EN LAS IMÁGENES, LAS CARACTERÍSTICAS Y PROPIEDADES DE LOS PRODUCTOS A ANUNCIAR.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA LOS TIPOS DE COMPOSICIÓN REQUERIDOS EN LA PRODUCCIÓN DE IMÁGENES A PARTIR DE LOS REQUERIMIENTOS DE LA PUBLICIDAD.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DEFINE LA PRODUCCIÓN Y COMPOSICIÓN EN LA ELABORACIÓN DE PIEZAS PUBLICITARIAS DE ACUERDO CON...',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'EVALUAR EL MENSAJE REDACTADO FRENTE')) {
                CriteriosEval::create([
                    'nombre' => 'VERIFICA EN LOS MENSAJES EL CONTENIDO DE ACUERDO CON EL ENFOQUE OBJETIVO Y EMOCIONAL CONSIDERANDO EL MERCADO META GENERANDO CONCIENCIA SOBRE EL PRODUCTO O SERVICIO.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'REDACTAR TEXTOS ESTABLECIENDO LAS DIFERENCIAS')) {
                CriteriosEval::create([
                    'nombre' => 'ELABORA LOS MENSAJES APLICANDO LAS NORMAS GRAMATICALES Y DIFERENTES NORMAS DEL CÓDIGO DE AUTORREGULACIÓN PUBLICITARIA, TENIENDO EN CUENTA LAS CARACTERÍSTICAS Y ATRIBUTOS DEL PRODUCTO O SERVICIO, EL PRESUPUESTO, EL TIEMPO Y EL ENTORNO DONDE SE DESARROLLARÁ LA CAMPAÑA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'REALIZA LOS TEXTOS Y MENSAJES CON LOS OBJETIVOS PUBLICITARIOS, EL MEDIO Y LOS REQUERIMIENTOS DE LA ESTRATEGIA CREATIVA, PARA GENERAR CONCIENCIA DEL PRODUCTO Y LA MARCA.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101030 = Competencia::where("codigo", '260101030')->first()->raps;
        foreach ($raps_260101030 as $rap) {
            if (Str::startsWith($rap->nombre, 'PLANEAR LA LOGÍSTICA DE LAS SESIONES DE GRUPO')) {
                CriteriosEval::create([
                    'nombre' => 'DISEÑA LA LOGÍSTICA DE LAS SESIONES DE GRUPO TENIENDO EN CUENTA EL DESARROLLO DE ACTIVIDADES CUALITATIVAS FRENTE A LAS NECESIDADES DE ESPACIOS, LOCACIONES O EQUIPOS AUDIOVISUALES DE ACUERDO A SU TAMAÑO, SU COMPOSICIÓN Y ESCENARIO, SEGÚN TÉCNICAS DEL PROCESO PLANTEADAS PARA ALCANZAR LOS OBJETIVOS DE LA INVESTIGACIÓN.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DIRIGIR LAS SESIONES DE GRUPO')) {
                CriteriosEval::create([
                    'nombre' => 'DESARROLLA SESIONES DE GRUPO APLICANDO LOS MÉTODOS DE TRABAJO INDICADOS EN LA GUÍA PARA ESTE PROCESO, TENIENDO EN CUENTA LAS FORMAS DE PARTICIPACIÓN DE LOS ENTREVISTADOS Y EL TIPO DE ESTUDIO O ÁREA OBJETO DE ESTUDIO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DIRIGE LAS SESIONES DE GRUPO, SIGUIENDO LAS DIFERENTES ETAPAS DEL PROCESO HASTA EVALUAR EL COMPORTAMIENTO HUMANO EN UN AMBIENTE DE CONFIANZA, SOMETIDO A LA INVESTIGACIÓN CON EL APOYO DE TECNOLOGÍAS COMO RESPUESTA A LOS PROBLEMAS DE INVESTIGACIÓN PLANTEADOS POR LA...',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DESARROLLAR ENTREVISTAS')) {
                CriteriosEval::create([
                    'nombre' => 'PREPARA ENTREVISTAS A PARTIR DEL ANÁLISIS DE PROBLEMAS Y OBJETIVOS DE INVESTIGACIÓN APLICANDO TÉCNICAS METODOLÓGICAS SEGÚN SU POBLACIÓN OBJETO Y MEDIOS DE COMUNICACIÓN PLANTEADOS EN LA GUÍA PARA EL TIPO DE MÉTODO DE RECOLECCIÓN DE LA INFORMACIÓN REQUERIDA POR LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DESARROLLA ENTREVISTAS APLICANDO TÉCNICAS DE MOTIVACIÓN CON BASE EN LAS CARACTERÍSTICAS DE PERFILES DE LOS ENTREVISTADOS APLICANDO LOS INSTRUMENTOS DE RECOLECCIÓN QUE PERMITAN ANALIZAR EL GRUPO VS. ESCENARIO/TIEMPO PROGRAMADO SEGÚN PLAN DE TRABAJO DE CAMPO.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101031 = Competencia::where("codigo", '260101031')->first()->raps;
        foreach ($raps_260101031 as $rap) {
            if (Str::startsWith($rap->nombre, 'ESTIMAR EL IMPACTO DEL MENSAJE')) {
                CriteriosEval::create([
                    'nombre' => 'VALORA EL IMPACTO DE CALIDAD, PRECIO E IMAGEN DE LA COMPAÑÍA, COMO VARIABLES INDEPENDIENTES PARA EL ANÁLISIS DE LA EFECTIVIDAD DEL ANUNCIO PUBLICITARIO, TENIENDO EN CUENTA, EL NÚMERO DE VISITAS AL SITIO DE EXPOSICIÓN COMERCIAL.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DETERMINAR LA UTILIDAD ECONÓMICA DE LA CAMPAÑA')) {
                CriteriosEval::create([
                    'nombre' => 'APLICA EL TEST DE ÁREAS PARA LA EVALUACIÓN DEL POTENCIAL COMERCIAL Y COMPRUEBA EL GRADO DE RECONOCIMIENTO DE MARCA EN EL MERCADO, TENIENDO EN CUENTA LA RENTABILIDAD DE LA CAMPAÑA COMPARADA CON OTRA SEGÚN LOS OBJETIVOS PROPUESTOS POR LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'RELACIONA LOS RENDIMIENTOS DE LA PUBLICIDAD CON LAS VENTAS, EVALUANDO LOS COMERCIALES ATRAVÉS DE ENCUESTAS FRENTE A LA FRECUENCIA DE TRANSMISIÓN EN DIFERENTES CANALES EN UNA HORA DE PROGRAMACIÓN PARA COMPROBAR LA EFECTIVIDAD DE LA FRANJA Y EL ALCANCE DEL MEDIO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'ESTABLECE LA GANANCIA ECONÓMICA DE LA CAMPAÑA. DE ACUERDO CON EL RENDIMIENTO MARGINAL DE LA INVERSIÓN Y EL INCREMENTO DE LAS VENTAS DEL PRODUCTO O SERVICIO, ASÍ COMO LA COBERTURA ALCANZADA DEL MENSAJE SEGÚN EL PLAN DE COMUNICACIÓN.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DESARROLLAR PROCESOS PARA LA MEDICIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'EVALÚA LA PERCEPCIÓN DE LOS CLIENTES FRENTE A LOS PRODUCTOS DE LA EMPRESA, CONSIDERANDO LOS TIEMPOS DE COMPRA, EL COMPORTAMIENTO DE LAS VENTAS Y LA COMPARACIÓN DE LOS RATINGS ALCANZADOS POR LA COMPETENCIA CON RELACIÓN A SU MENSAJE PUBLICITARIO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'MIDE EL GRADO DE PERFECCIÓN DE CADA PIEZA O CAMPAÑA PUBLICITARIA CONSIDERANDO SUS PUNTOS FUERTES Y DÉBILES, A PARTIR DEL CALCULO DE LOS RENDIMIENTOS ALCANZADOS SOBRE LA INVERSIÓN PUBLICITARIA Y LAS TASAS DE RETENCIÓN DE MENSAJES EXPRESADAS EN RATING, GRP`S Y COSTO POR MIL E IMPACTO CPM, COMO INDICADORES DE EFECTIVIDAD DEL MENSAJE PUBLICITARIO.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101033 = Competencia::where("codigo", '260101033')->where("nombre", 'like', 'CONTACTAR%')->first()->raps;
        foreach ($raps_260101033 as $rap) {
            if (Str::startsWith($rap->nombre, 'REALIZAR LA PROSPECTACIÓN DE CLIENTES TENIENDO EN CUENTA')) {
                CriteriosEval::create([
                    'nombre' => 'ESTUDIA EL COMPORTAMIENTO DE LOS CLIENTES DESDE EL PUNTO DE VISTA DEL CONSUMO DE BIENES SERVICIOS CON EL FIN DE IDENTIFICAR LAS NECESIDADES PUNTUALES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'APLICA LAS ETAPAS DE PROSPECCIÓN DE CLIENTES SEGÚN SU CONTEXTO CULTURAL Y SOCIAL. ',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA QUIENES SON LOS CLIENTES DEPENDIENDO DEL TIPO DE NEGOCIACIÓN.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'EMPLEA SOFTWARE PARA LA BÚSQUEDA, SELECCIÓN E INTERCAMBIO DE INFORMACIÓN.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'PREPARAR E IDENTIFICAR LOS ELEMENTOS')) {
                CriteriosEval::create([
                    'nombre' => 'PLANEA LAS OFERTAS DE VENTAS DE PRODUCTOS Y SERVICIOS PARA LOS CLIENTES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'IDENTIFICA LOS ELEMENTOS COMPONENTES DE UNA OFERTA O PROPUESTA DE VENTAS. ',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'ESTRUCTURA LAS OFERTAS DE VENTAS DE PRODUCTOS Y SERVICIOS.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PRESENTA LAS OFERTAS O PROPUESTAS CON DESCRIPCIÓN DE LAS CONDICIONES COMERCIALES.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101035 = Competencia::where("codigo", '260101035')->first()->raps;
        foreach ($raps_260101035 as $rap) {
            if (Str::startsWith($rap->nombre, 'ELABORAR Y REVISAR EL PLAN DE MEDIOS')) {
                CriteriosEval::create([
                    'nombre' => 'ADECUA EL PLAN DE MEDIOS A LAS NECESIDADES DEL PRODUCTO Y AL PRESUPUESTO APLICANDO LA MEZCLA DE MEDIOS Y LOS VEHÍCULOS ESPECÍFICOS, PARA EL CUMPLIMIENTO DE LOS OBJETIVOS Y EFECTIVIDAD DE LA CAMPAÑA.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'ELABORAR EL PLAN DE MEDIOS SIGUIENDO')) {
                CriteriosEval::create([
                    'nombre' => 'ELABORA EL PLAN DE MEDIOS PARA EL CUMPLIMIENTO DEL OBJETIVO DE LA CAMPAÑA PUBLICITARIA, DE ACUERDO CON LOS OBJETIVOS UTILIZANDO TÉCNICAS Y TECNOLOGÍAS EXISTENTES.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'DESARROLLAR ESTRATEGIAS DE COMUNICACIÓN')) {
                CriteriosEval::create([
                    'nombre' => 'DEFINE LA ESTRATEGIA DE COMUNICACIÓN TENIENDO EN CUENTA LA CAPACIDAD DE LA EMPRESA A PARTIR DE LOS ELEMENTOS DEL BRIEFING APLICANDO TÉCNICAS Y TECNOLOGÍAS EXISTENTES PARA SU DISEÑO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PLANIFICA POLÍTICAS Y ESTRATEGIAS DE COMUNICACIÓN PARA EL MANEJO DE LA IMAGEN INTERNA Y EXTERNA TENIENDO EN CUENTA LOS COMPONENTES DE LA ESTRATEGIA DE COMUNICACIÓN.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101033_i = Competencia::where("codigo", '260101033')->where("nombre", 'like', 'Prospectar%')->first()->raps;
        foreach ($raps_260101033_i as $rap) {
            if (Str::startsWith($rap->nombre, 'DIAGNOSTICAR CLIENTES DE')) {
                CriteriosEval::create([
                    'nombre' => 'UTILIZA CRITERIOS DE ANÁLISIS PARA DIAGNOSTICAR CLIENTES DE ACUERDO CON CLASIFICACIÓN Y PROCEDIMIENTO TÉCNICO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'GENERA BASE DE DATOS DE PROSPECTOS DIGITALES (LEADS) A PARTIR DEL DIAGNÓSTICO TENIENDO EN CUENTA LA FILOSOFÍA EMPRESARIAL.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'PRESENTAR PROPUESTA COMERCIAL')) {
                CriteriosEval::create([
                    'nombre' => 'ORGANIZA LA INFORMACIÓN COMERCIAL DEL CLIENTE SEGÚN VARIABLES DE INTERÉS PARA LA EMPRESA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'DETALLA EL PERFIL DE LOS CLIENTES DE LA EMPRESA A PARTIR DE CRITERIOS DE SEGMENTACIÓN Y PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
            } elseif (Str::startsWith($rap->nombre, 'PERFILAR CLIENTES DE ACUERDO')) {
                CriteriosEval::create([
                    'nombre' => 'VALIDA REQUERIMIENTO DEL CLIENTE DE ACUERDO SEGMENTO Y PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'APLICA CRITERIOS DE ELABORACIÓN DE PROPUESTA COMERCIAL DE ACUERDO CON PERFIL DEL CLIENTE Y PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
            }
        }


        $raps_260101074 = Competencia::where("codigo", '260101074')->first()->raps;
        foreach ($raps_260101074 as $rap) {
            if (Str::startsWith($rap->nombre, 'CARACTERIZAR LA AUDIENCIA')) {
                CriteriosEval::create([
                    'nombre' => 'CONSTRUYE AUDIENCIA A PARTIR DE NECESIDADES DEL SEGMENTO DE MERCADO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'SELECCIONA MEDIOS DIGITALES TENIENDO EN CUENTA REQUERIMIENTOS DEL PLAN DE MERCADEO DIGITAL.',
                    'rap_id' => $rap->id
                ]);
            }elseif(Str::startsWith($rap->nombre, 'PROMOCIONAR CONTENIDO DE ACUERDO')) {
                CriteriosEval::create([
                    'nombre' => 'UTILIZA MEDIOS DIGITALES TENIENDO EN CUENTA PROTOCOLOS Y SEGMENTO DE MERCADO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PROMUEVE CONTENIDOS DIGITALES TENIENDO EN CUENTA PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'VERIFICA CONTENIDO DE ACUERDO CON PROCEDIMIENTO Y PLAN DE MARKETING. ',
                    'rap_id' => $rap->id
                ]);

            }elseif(Str::startsWith($rap->nombre, 'INTERACTUAR CON LA AUDIENCIA ACORDE')) {
                CriteriosEval::create([
                    'nombre' => 'REGISTRA INTERACCIÓN CON LOS CLIENTES TENIENDO EN CUENTA PROTOCOLOS ESTABLECIDOS.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'GENERA REPORTE DE MÉTRICAS TENIENDO EN CUENTA PLAN DE MERCADEO.',
                    'rap_id' => $rap->id
                ]);
            }
        }




        $raps_291301122 = Competencia::where("codigo", '291301122')->first()->raps;
        foreach ($raps_291301122 as $rap) {
            if (Str::startsWith($rap->nombre, 'PROPONER EL CONCEPTO CREATIVO BÁSICO')) {
                CriteriosEval::create([
                    'nombre' => 'PLANTEA EL CONCEPTO CREATIVO BÁSICO DE LA PIEZA TENIENDO PRESENTE EL BRIEF Y EL PÚBLICO OBJETIVO.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'BOCETEA LA PIEZA GRÁFICA BÁSICA DE ACUERDO CON REQUERIMIENTOS COMUNICACIONALES. ',
                    'rap_id' => $rap->id
                ]);
            }elseif(Str::startsWith($rap->nombre, 'PREPARAR CONTENIDO BÁSICO DE ACUERDO')) {
                CriteriosEval::create([
                    'nombre' => 'SELECCIONA ELEMENTOS DE CONTENIDOS A PARTIR DEL FIN DEL MENSAJE Y LOS ELEMENTOS COMUNICACIONALES.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'CONSOLIDA EL CONTENIDO BÁSICO DE LA PIEZA DE ACUERDO CON REQUERIMIENTOS COMUNICACIONALES Y TÉCNICAS DE ELABORACIÓN.',
                    'rap_id' => $rap->id
                ]);
            }elseif(Str::startsWith($rap->nombre, 'ELABORAR PIEZA GRÁFICA BÁSICA TENIENDO EN CUENTA')) {
                CriteriosEval::create([
                    'nombre' => 'CONSTRUYE LA PIEZA GRÁFICA BÁSICA EN CORRESPONDENCIA CON EL OBJETIVO DE COMUNICACIÓN Y EL MANUAL DE IDENTIDAD GRÁFICA/ CORPORATIVA.',
                    'rap_id' => $rap->id
                ]);
                CriteriosEval::create([
                    'nombre' => 'PRESENTA LA PROPUESTA DE PIEZA GRÁFICA BÁSICA DE ACUERDO CON EL OBJETIVO DE COMUNICACIÓN Y…',
                    'rap_id' => $rap->id
                ]);
            }
        }











    }
}
