db.producto.insert([
  { "_id" : 1, 
    "codigo" : "Q5X", 
    "titulo" : "Sensor Fotoeléctrico", 
    "descripcion" : "El láser de supresión de fondo Q5X es un potente sensor de resolución de problemas en un dispositivo económico con una carcasa rectangular estándar de la industria. El mejor sensor de triangulación láser de su clase cuenta con un rango de 9.5 cm (4 pulgadas) a 2 m (6 pies, 6 pulgadas), es fácil de usar y proporciona una detección confiable de los objetivos más desafiantes.", 
    "marca" : "banner", 
    "medida" : ["distancia"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 2, 
    "codigo" : "EZAC", 
    "titulo" : "Cortina de seguridad", 
    "descripcion" : "Las cortinas EZ-SCREEN LS son dispositivos de seguridad intuitivos y fácil de usar utilizados para la protección de máquinas. Están construidas para resistir los desafíos que se encuentran comúnmente en entornos de fabricación y envasado. Tres resoluciones (capacidad de detección) disponibles: 14 mm, 23 mm y 40 mm con un alcance de hasta 12 m (39 pies)", 
    "marca" : "banner", 
    "medida" : ["cierre"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 3, 
    "codigo" : "TL50", 
    "titulo" : "Torreta indicadora", 
    "descripcion" : "Las torretas indicadoras son dispositivos autónomos que utilizan tecnología LED de alta duración, son fáciles de instalar, y brindan una indicación altamente visible para guiar al operario y notificar del estado de las operaciones.", 
    "marca" : "banner", 
    "medida" : ["indicadores"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 4, 
    "codigo" : "DXM", 
    "titulo" : "Sensor de presion para procesos estériles", 
    "descripcion" : "El controlador DXM100 es un controlador inalámbrico industrial desarrollado para facilitar la conectividad Ethernet y las aplicaciones IIoT (Industrial Internet of Things). Disponible con un chip interno de un Gateway DX80 o un Radio de Datos Multihop, este poderoso dispositivo con comunicación Modbus conecta las redes inalámbricas locales con el internet y/o los sistemas host.", 
    "marca" : "banner", 
    "medida" : ["presión"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 5, 
    "codigo" : "QM42", 
    "titulo" : " Sensor de Vibración y Temperatura - Inalámbrico", 
    "descripcion" : "El Sensor de Vibración y Temperatura QM42T facilita el monitoreo de la salud de una máquina. Mide la velocidad RMS y la temperatura de tal forma que los problemas pueden ser detectados antes de que se vuelvan muy severos y causen daño adicional o resulten en tiempo muerto no planeado.", 
    "marca" : "banner", 
    "medida" : ["vibración","temperatura"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 6, 
    "codigo" : "233-50", 
    "titulo" : "Manómetro de muelle tubular, acero inoxidable", 
    "descripcion" : "Para la industria de procesos, ejecución estándar, DN 63, 100 y 160.  Con líquido de relleno para realizar la amortiguación contra elevadas cargas dinámicas y vibraciones (Tipo 233.50). Para medios gaseosos y líquidos, agresivos, de baja viscosidad y no cristalizantes.",
    "marca" : "wika", 
    "medida" : ["nivel"], 
    "sector" : ["procesos"] 
  },
  { "_id" : 7, 
    "codigo" : "TC10-B", 
    "titulo" : "Termopar para vaina adicional con cabezal", 
    "descripcion" : "Los termopares generan una tensión eléctrica en función de la temperatura y son óptimos para elevadas temperaturas hasta 1.700 ºC. Las versiones encamisadas son muy resistentes contra vibraciones extremas (según de la versión del dispositivo, sensor, clase de exactitud y materiales en contacto con el material). Para termopares rigen las clases de exactitud 1 y 2 (estándar y especial). Son disponibles con un valor de tolerancia según IEC 60581 / ASTM E230.", 
    "marca" : "wika", 
    "medida" : ["temperatura"], 
    "sector" : ["industrial"] 
  },

  { "_id" : 8, 
    "codigo" : "BNA", 
    "titulo" : "Indicador de nivel tipo bypass con indicador magnético", 
    "descripcion" : "Medición en continuo de niveles sin fuente de alimentación, Indicación de nivel proporcional a la altura, Aplicaciones variadas con diseño individualizado y materiales resistentes a la corrosión, Química y petroquímica, extracción de petróleo y gas (on y offshore), industria naval, maquinaria, instalaciones de transformación de energía, plantas energéticas, Tratamiento de agua de proceso y agua potable, industria de bebidas y alimentos, industria", 
    "marca" : "wika", 
    "medida" : ["nivel"], 
    "sector" : ["industrial"] 
  },
  { "_id" : 9, 
    "codigo" : "F4817", 
    "titulo" : "Célula de pesaje para plataformas", 
    "descripcion" : "Las células de carga son versiones especiales de transductores de fuerza para su uso en equipos de pesaje y permiten exactitudes de medición muy elevadas entre el 0,01% y el 0,05% FE. Las células de carga se utilizan en plataformas de pesaje, equipos de llenado, sistemas de embalaje, sistemas de prueba dinámica, así como en balanzas electrónicas de precisión, dispositivos de etiquetado de precios y balanzas industriales.", 
    "marca" : "wika", 
    "medida" : ["peso"], 
    "sector" : ["procesos"] 
  },
  { "_id" : 10, 
    "codigo" : "FSD-3", 
    "titulo" : "Detector de caudal electrónico con indicación digital", 
    "descripcion" : "Los interruptores de caudal son óptimos para la visualización y monitorización de medios líquidos y gaseosos. Los instrumentos disponen de una alta precisión de conmutación y seguridad funcional, baja histéresis del interruptor y ofrecen un ajuste continuo del punto de conmutación configurables por el usuario.", 
    "marca" : "wika", 
    "medida" : ["caudal"], 
    "sector" : ["procesos"] 
  }
]);


db.medida.insert([
  { "_id" : 1, "medida" : "distancia" },
  { "_id" : 2, "medida" : "cierre" },
  { "_id" : 3, "medida" : "indicadores" },
  { "_id" : 4, "medida" : "presión"},
  { "_id" : 5, "medida" : "vibración" },
  { "_id" : 5, "medida" : "temperatura" },
  { "_id" : 5, "medida" : "nivel" },
  { "_id" : 5, "medida" : "peso" },
  { "_id" : 5, "medida" : "caudal" }
]);


db.sector.insert([
  { "_id" : 1, "sector" : "industrial" },
  { "_id" : 2, "sector" : "procesos" }
]);


