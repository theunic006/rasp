import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)
GPIO.setup(22, GPIO.OUT)

GPIO.output(22, True)