# Example R program to read CSV File
 
#set working directory - the directory containing csv file
setwd("/home/edward/Documents/LP/proyecto2/Extraccion/archivos_csv/")
 
#read csv file
csvDataUniverso = read.csv("eluniversocom_tweets.csv")
csvDataExtra = read.csv("DiarioExtraEc_tweets.csv")
csvDataExpreso = read.csv("Expresoec_tweets.csv")
csvDataSuper = read.csv("SUPERCANCHERO_tweets.csv")
#-----------------------------hora y fecha
#id <- min(csvData$id)
#subseleccion=subset(csvData,created_at="2018-12-29 15:27:27")
#print(id)
#dtparts = t (as.data.frame (strsplit (csvData$created_at, ' ')))
#tiempos = cron (fechas = dtparts [, 1], times = dtparts [, 2], + formato = c ('ym-d', 'h: m: s'))
#ndate1 <- as.Date(csvData$created_at, "%Y-%m-%d %H:%M:%S");
#primero puedes guardar por mes la informacion ya sea del id , el mes en efcto y de las palabras claves que tienes o buscas y hacer un  promedio al final para sacar los respectivos indices por mes en la ciudad de guayaquil de que se yo robos, secuestro etc del total de noticias en el mes
fecha<-"2018-12"
ciudad<-"Guayaquil"
palabra_clave1<-"robo"
palabra_clave2<-"asalto"
palabra_clave3<-"delito"

DicembreUniverso <- subset(csvDataUniverso,grepl(paste("^",fecha,sep=""), created_at) & grepl(ciudad, text)& (grepl(palabra_clave1, text) | grepl(palabra_clave2, text) | grepl(palabra_clave3, text)) )
DicembreExtra <- subset(csvDataExtra,grepl(paste("^",fecha,sep=""), created_at) & (grepl(palabra_clave1, text) | grepl(palabra_clave2, text) | grepl(palabra_clave3, text)) )
DicembreExpreso <- subset(csvDataExpreso,grepl(paste("^",fecha,sep=""), created_at) & (grepl(palabra_clave1, text) | grepl(palabra_clave2, text) | grepl(palabra_clave3, text)) )
DicembreSuper <- subset(csvDataSuper,grepl(paste("^",fecha,sep=""), created_at) & (grepl(palabra_clave1, text) | grepl(palabra_clave2, text) | grepl(palabra_clave3, text)) )

setwd("/home/edward/Documents/LP/proyecto2/Procesamiento/archivos_csv_procesados")
#print("-------------------------------Aqui es universo---------------------")
#print(DicembreUniverso)
a<-paste(fecha,ciudad,palabra_clave1,palabra_clave2,palabra_clave3,"universo.csv",sep='_')
write.csv(DicembreUniverso, file = a)
#print("--------------------------------fin universo------------------------")
#print("-------------------------------Aqui es Extra---------------------")
#print(DicembreExtra)
b<-paste(fecha,palabra_clave1,palabra_clave2,palabra_clave3,"Extra.csv",sep='_')
write.csv(DicembreExtra, file = b)
#print("--------------------------------fin Extra------------------------")
#print("-------------------------------Aqui es Expreso---------------------")
#print(DicembreExpreso)
c<-paste(fecha,palabra_clave1,palabra_clave2,palabra_clave3,"Expreso.csv",sep='_')
write.csv(DicembreExpreso, file = c)
#print("--------------------------------fin Expreso------------------------")
#print("-------------------------------Aqui es Super---------------------")
#print(DicembreSuper)
d<-paste(fecha,palabra_clave1,palabra_clave2,palabra_clave3,"Super.csv",sep='_')
write.csv(DicembreSuper, file = d)
#print("--------------------------------fin Super------------------------")
#-----------------------------fin ----------------
# print the data type of csvData
#cat("CSV Data type : ",class(csvData), "\n\n")
 
#print(csvData)
