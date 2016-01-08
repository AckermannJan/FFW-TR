/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author Jan Ackermann
 * version 1.0
 */
$(document).ready(function(){
    var scans = [];
    var words = ["Wärmebildkamera",
                 "KdoW",
                 "MTF",
                 "LF 10/6",
                 "LF 8/6",
                 "Löschgruppenfahrzeuges 8/6",
                 "Anhänger",
                 "Atemschutzüberwachung",
                 "Höhensicherungssatz",
                 "Schleifkorbtrage",
                 "Spineboard",
                 "Hochdruckfeuerlöschgerät",
                 "Kaminkehrwerkzeug",
                 "Rettungsrucksack",
                 "Sprungretter",]; 

    var verzeichniss = {"Wärmebildkamera" :"http://www.feuerwehr-traisa.de/W.ae.rmebildkamera.htm",
                                                                                    "KdoW":"http://www.feuerwehr-traisa.de/KdoW.htm",
                        "MTF":"http://www.feuerwehr-traisa.de/MTF.htm",
                        "LF 10/6":"http://www.feuerwehr-traisa.de/LF-10_6.htm",
                        "LF 8/6":"http://www.feuerwehr-traisa.de/LF-8_6.htm",
                        "Löschgruppenfahrzeuges 8/6":"http://www.feuerwehr-traisa.de/LF-8_6.htm",
                        "Anhänger":"http://www.feuerwehr-traisa.de/Anh.ae.nger.htm",
                        "Atemschutzüberwachung":"http://www.feuerwehr-traisa.de/Atemschutz.ue.berwachung.htm",
                        "Höhensicherungssatz":"http://www.feuerwehr-traisa.de/H.oe.hensicherungssatz.htm",
                        "Schleifkorbtrage":"http://www.feuerwehr-traisa.de/Schleifkorbtrage.htm",
                        "Spineboard":"http://www.feuerwehr-traisa.de/Spineboard.htm",
                        "Hochdruckfeuerlöschgerät":"http://www.feuerwehr-traisa.de/Hochdruckfeuerl.oe.schger.ae.t.htm",
                        "Kaminkehrwerkzeug":"http://www.feuerwehr-traisa.de/Kaminkehrwerkzeug.htm",
                        "Rettungsrucksack":"http://feuerwehr-traisa.de/Rettungsrucksack.htm",
                        "Sprungretter":"http://feuerwehr-traisa.de/Sprungretter.htm"};


    $(".scan").each(function(i){
      $(this).addClass("count" + i);
    });

    $( ".scan" ).each(function(n) {
            inhalt = $(this).html();  
      scans.push(inhalt); 
      text = scans[n];
      $.each( words, function( key, value ) {
            if (scans[n].indexOf(value) >= 0){         
          text = text.replace(value, "<a href="+verzeichniss[value]+">"+value+"</a>");  
        }
            });  
      $(".count"+n).html(text)
    });
});