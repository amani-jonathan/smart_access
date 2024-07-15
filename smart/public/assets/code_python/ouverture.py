#!/usr/bin/python 

from gpiozero import LED
from gpiozero import OutputDevice
from time import sleep


# Définissez le numéro de broche GPIO pour la LED et le relais 
pin = 17
pin_relais = 27
# Créez une instance de LED
led = LED(pin)
relais = OutputDevice(pin_relais, active_high=False)


# Allumez la LED pendant 5 secondes
led.on()
relais.on()
sleep(5)
# Éteignez la LED et le relais
#led.off()
#relais.off()
#sleep(1)
