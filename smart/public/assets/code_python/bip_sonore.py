#!/usr/bin/python 

from gpiozero import LED
from time import sleep, time
from gpiozero import Buzzer

buzzer = 23
pin = 17
buzzer = Buzzer(buzzer)
pin_relais = 27

# Créez une instance de LED
led = LED(pin)

# Enregistrez le moment où vous avez commencé l'exécution
start_time = time()

# Exécutez la boucle pendant 5 secondes
while (time() - start_time) < 5:
    led.on()
    buzzer.on()
    sleep(0.5)
    led.off()
    buzzer.off()
    sleep(0.2)

# Assurez-vous que la LED et le buzzer sont éteints à la fin
led.off()
buzzer.off()

