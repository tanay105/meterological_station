AIM:-
	Make a Weather/Meteorological Station With a Raspberry Pi.

ABstract:-
	Meteorological station allows real time control of meteorological data like wind speed and direction, temperature, relative humidity, atmospheric pressure and precipitation rate. In this way the data can be stored for further studies and decision making.
	
	Benefits:-
		Continuous measurement of meteorological parameters
		Real-time information to customers and citizens
		Weather control
		Detailed analysis of the results (Excel, JPG, …)
		
	Features:-
		Temperature (Celsius)
		Relative humidity
		Wind speed
		Wind direction
		Precipitation rate (cubic millimeters)
		Light intensity
		

Proposed System:-
	Interface:- This subsystem helps in transferring data between the raspberry pi and the cloud based web application. It basically provides an interface and way to transmit data between the hardware and cloud.

	Data Collection and Display:- This subsystem retrieves the data from the cloud web application and displays it on the web page with the help of a suitable GUI. Moreover, from the web page the user can download the data for off-line usage as well.

	Instruments:- This subsystem gathers data from the surrounding environment with the help of the sensors used with the hardware, processes the data and stores them on a database on the raspberry pi. then with the help of Interface system it uploads this data on the cloud web application.



H/w requriements:
	Raspberry Pi
	Breadboard
	Wires
	WIFI module(if not on chip)
	Sensors:-		
		Temperature DHT11/22;
		Temperature BMP180;
		Humidity DHT11/22;
		Pressure BMP180;
		Dew point temperature DHT11/22;
		Altitude BMP180;
		Light intensity LDR;
		MCP3008 - to convert analog to digital inputs