import Rpi.GPIO as gpio
import urllib2

gpio.setwarnings(False)
gpio.setmode(gpio.board)
gpio.setup(5,gpio.out)
gpio.setup(2,gpio.out)

true = 1
while(true):
    try:
        responseLight = urllib2.urlopen('http://sabya1.000webhostapp.com/buttonStatusLight.php')
        statusLight = responseLight.read()
        responseFan = urllib2.urlopen('http://sabya1.000webhostapp.com/buttonStatusFan.php')
        statusFan = responseFan.read()
    except urllib2.HTTPError, e:
        printe.code

    except urllib2.URLError, e:
        printe.args

    print(statusLight, statusFan)

    if statusLight == "ON":
        gpio.output(5, True)
    elif statusLight == "OFF":
        gpio.output(5,False)
    
    if statusFan == "ON":
        gpio.output(2, True)
    elif statusFan == "OFF":
        gpio.output(2, False)
