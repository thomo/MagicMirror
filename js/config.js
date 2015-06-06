// for navigator language
var lang = 'de'; // window.navigator.language;
// you can change the language
// var lang = 'en';

//change weather params here:
//units: metric or imperial
var weatherParams = {
    'q':'Bergisch Gladbach,Germany',
    'units':'metric',
    'lang':lang
};

var feed = 'http://www.spiegel.de/schlagzeilen/tops/index.rss';

// compliments:
var morning = [
            'Herzlichen Glückwunch!',
            'Guten Morgen, Sonnenschein!',
            'Genieße den Tag',
            'Gut geschlafen?'
        ];
        
var afternoon = [
            'Hello, beauty!',
            'You look sexy!',
            'Looking good today!',
            'Und jetzt einen Kaffee!'
        ];
       
var evening = [
            'Eine Augenweide!',
            'Bettzeit?',
            'Heiss, mach dich bereit!',
            'Es ist ein Genuß dich zu sehen!',
            'Cool!'
        ];
