Hallo,

der Code ist nicht ganz sauber, aber ich denke, dass die Aufgabe erfüllt wurde.

viele Grüße

# Linux / OSX
# docker build -t myphp .
# docker run -p 80:80 -v /Users/Sebastian/share/tiny_code/src:/var/www/html myphp

# Windows
# docker build -t myphp .
# docker run -it -p 80:80 -v c:/tiny_code:/var/www/html myphp