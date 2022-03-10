library(highcharter)

datos_CENEC <- read.csv("~/Ingenieria Estadistica II PAO 2021/Ingenieria de Datos/Proyecto_SegundoParcial_IngenieriaDeDatos/DATOS_ABIERTOS_ENCUESTA_CENSO_2010/cenec_2010.csv", sep=";")




# ---------------------------------------------------------------------
library(base)

v = as.factor(datos_CENEC$s2p4_1)

levels(v) = c('Masculino','Femenino')

hc_id_1 <- hchart(v) %>%
  hc_title(text = "Barplot: Sexo del Gerente") %>%
  hc_add_theme(hc_theme_economist()) # Histograma Sexo del Gerente


hc_id_1
# ---------------------------------------------------------------------


#prcomp(datosAnalisis)

#fviz_eig(prcomp(datosAnalisis), addlabels = TRUE, ylim = c(0, 100))

hc_id_2 <- hchart(prcomp(datosAnalisis))

hc_id_2

# ---------------------------------------------------------------------

v2 <- as.factor(datos_CENEC$s1p2)

levels(v2) = c('Azuay',
               'Bolivar',
               'Canar',
               'Carchi',
               'Cotopaxi',
               'Chimborazo',
               'El Oro',
               'Esmeraldas',
               'Guayas',
               'Imbabura',
               'Loja',
               'Los Rios',
               'Manabi',
               'Morona Santiago',
               'Napo',
               'Pastaza',
               'Pichincha',
               'Tungurahua',
               'Zamora Chinchipe',
               'Galapagos',
               'Sucumbios',
               'Orellana',
               'Santo Domingo de los Tsachilas',
               'Santa Elena',
               'Zonaz No Delimitadas'
)

#hist(datos_CENEC$s1p2)
#str(as.factor(datos_CENEC$s1p2))
#hist(sample(datos_CENEC$s1p2, size = 1000))
#hchart(hist(datos_CENEC$s1p2, breaks=80, main = "Histograma Provincias", xlim = c(0,25)))
#hchart(barplot(datos_CENEC$s1p2))

hc_id_3 <- hchart(v2) %>%
  hc_title(text = "Barplot: Provincias") %>%
  hc_add_theme(hc_theme_economist()) # Histograma Sexo del Gerente

hc_id_3


# ---------------------------------------------------------------------


reg_contable = as.factor(datos_CENEC$s5p1)
inv_mercado = as.factor(datos_CENEC$s6p6)
gasto_capacit = as.factor(datos_CENEC$s6p10)
uso_internet = as.factor(datos_CENEC$s6p11)
gasto_investigacion = as.factor(datos_CENEC$s6p9)

tabla_conteos_CENEC_1 <- table(reg_contable)
tabla_conteos_CENEC_2 <- table(inv_mercado)
tabla_conteos_CENEC_3 <- table(gasto_capacit)
tabla_conteos_CENEC_4 <- table(uso_internet)
tabla_conteos_CENEC_5 <- table(gasto_investigacion)

tabla_conteos_CENEC_1 
tabla_conteos_CENEC_2 
tabla_conteos_CENEC_3 
tabla_conteos_CENEC_4 
tabla_conteos_CENEC_5


fila_titulo_CENEC <- c('Registros Contables','Investigacion de Mercado','Gasto Capacitacion','Uso de Internet','Gasto Investigacion')
fila1_CENEC <- c(62315,8544,19214,51389,3124) #Si
fila2_CENEC <- c(437902,458758,448088,415913,464178) #No

df_inferencial_CENEC <- rbind(fila1_CENEC, fila2_CENEC)

df_inferencial_CENEC

# H0: p1 = p2 = p3
# H1: No todas las proporciones son iguales

# p1 = proporcion de personas que dijeron si en 'tuvo enfermedad'
# p2 = proporcion de personas que dijeron si en 'realizo pagos'
# p3 = proporcion de personas que dijeron si en 'tuvo que contraer deudas'


prop.table(df_inferencial_CENEC,2)

colnames(df_inferencial_CENEC) <- fila_titulo_CENEC

barplot(prop.table(df_inferencial_CENEC,2), beside=T, legend.text=c('Si','No'))


chisq.test(df_inferencial_CENEC)

# Valor p 2.2e-16 mucho menor que 0.05. 
#  Sí existe una asociación entre las variables, es decir, estan asociados de manera significativa



library(plotly)

evaluacion <- fila_titulo_CENEC
si_CENEC <- fila1_CENEC
no_CENEC <- fila2_CENEC
data_inf_CENEC <- data.frame(fila_titulo_CENEC, si_CENEC, no_CENEC)

fig_inf_CENEC <- plot_ly(data_inf_CENEC, x = ~evaluacion, y = ~si_CENEC, type = 'bar', name = 'Si', marker = list(color = 'rgb(25, 211, 218)',
                                                                                               line = list(color = 'rgb(8,48,107)',
                                                                                                           width = 1.5)))
fig_inf_CENEC <- fig_inf_CENEC %>% add_trace(y = ~no_CENEC, name = 'No', marker = list(color = 'rgb(55, 58, 64)',
                                                                     line = list(color = 'rgb(8,48,107)', width = 1.5)))
fig_inf_CENEC <- fig_inf_CENEC %>% layout(yaxis = list(title = 'Count'), barmode = 'group')

fig_inf_CENEC



# ---------------------------------------------------------------------

























