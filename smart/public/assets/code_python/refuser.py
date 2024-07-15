#!/usr/bin/python

from gpiozero import LED
from gpiozero import Buzzer
from time import sleep 

led_rouge = LED(22)
buzzer = 23
buzzer = Buzzer(buzzer)
led_rouge.on()
buzzer.on()
sleep(3)
led_rouge.off()
buzzer.off()
buzzer.beep(440,0.5)
sleep(1)
