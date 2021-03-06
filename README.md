# Literary Clock

Cloned from [this brilliant idea by Jaap Meijers](https://www.instructables.com/id/Literary-Clock-Made-From-E-reader/). I removed the option of hiding the source and added optional italics. I also added a few, mostly Dutch books, and cleaned up the existing entries. 

I use ` ‖ ` (non-breaking space, vertical double line, space) for line-endings in poetry.

## Ignoring older entries

You can ignore older entries by adding `#` at the start of the line. This shortens render time dramatically. You *must* uncomment all lines with the same time if you use this. For instance, if you add a new entry at 18:00, make sure to uncomment all 18:00 entries, or it will replace an older image.

For my future self who doesn’t want to find the regular expression again: 

- s: `\n([^#])`
- r: `\n#$1`

Removing all comments: 

- s: `\n[#]([^#])`
- r: `\n$1`

## Cleaning up

Cleaning up the existing entries means that I  made quite a few of them shorter, made sure all times are used (some entries have multiple times in them), and made better use of time stamps like *before eight*, or *around eleven*.

Will update as I keep on reading.

You will need the [Libertine Fonts](http://libertine-fonts.org/show-me/).

## Books I added

- A History of Pictures|David Hockney & Martin Gayford
- Adam|Wanda Reisel
- Almost No Memory|Lydia Davis
- Arthur, de koning van eens en ooit|T.H. White
- Atletiek van snijbloemen|Koenraad Goudeseune
- Beschermvrouwe van de verschoppelingen|Delphine Lecompte
- Blast Integraal|Manu Larcenet
- Bloedwonder|Barry Smit
- Brave New World |Aldous Huxley
- Break it Down|Lydia Davis
- Brief aan een meisje in Parijs|Julio Cortázar
- Calm Technology|Amber Case
- Circe|Madeline Miller
- Cliënt E. Busken|Jeroen Brouwers
- Contouren|Rachel Cusk
- Creative Quest|Questlove
- De dag dat ik mijn naam veranderde|Bibi Dumon Tak
- De dood in haar handen|Ottessa Moshfegh
- De eik was hier|Bibi Dumon Tak
- De goede zoon|Rob van Essen
- De luiaards in de vruchtbare vallei|Albert Cossery
- De meester en Margarita|Michaïl Boelgakov
- De Mierenmoordenaar|Julio Cortázar
- De niet verhoorde gebeden van Jacob de Zoet|David Mitchell
- De rook die dondert|Namwali Serpeli
- De terugkeer van Lupe García|Carolina Trujillo
- De verendief|Kirk Wallace Johnson
- De wereld van gisteren|Stefan Zweig
- De wraak van Vondel|Frank van Pamelen
- De zangbreker|Carolina Trujillo
- Dead Lions|Mick Herron
- Een vrouw apart. En de stad|Vivian Cornick
- Een zachte hand|Leïla Slimani
- Elektriciteit|Rob van Essen
- Foon|Marente de Moor
- Grand Hotel Europa|Ilja Leonard Pfeijffer
- habitus|Radna Fabias
- Hamnet|Maggie O’Farrell
- Helden|Stephen Fry
- Herfst|Ali Smith
- Het beroep van mijn vader|Sorj Chalandon
- Het Hollandse Huis|Ann Patchett
- Het huis van de moskee|Kader Abdolah
- Het internet is stuk|Marleen Stikker
- Het Land|Aukelien Weverling
- Het mooiste verhaal over mijn familie|Nelleke Zandwijk
- Het nut van nutteloos onderzoek|Robbert Dijkgraaf
- Het pad van de gele slippers|Kader Abdolah
- Het Perenlied|Joost Oomen
- Het perenveld|Nana Ekvtimisjvili
- Het vogelhuis|Eva Meijer
- Hier wonen ook mensen|Rob van Essen
- Hogere natuurkunde|Ellen Deckwitz
- Homegoing|Yaa Gyasi
- Honderd jaar eenzaamheid|Gabriel García Márquez
- How to Win Friends and Influence People|Dale Carnegie
- Icarië|Uwe Timm
- I Know Why The Caged Bird Sings|Maya Angelou
- If Beale Street Could Talk|James Baldwin
- In alle steden|Aukelien Weverling
- Kamers antikamers|Niña Weijers
- Kom, roep het van de bergen|James Baldwin
- Kommunalka Child|Nanda Milbreta
- Kraaien in het paradijs|Ellen de Bruin
- Kudos|Rachel Cusk
- Kus|Julien Ignacio
- Lanny|Max Porter
- Lente|Ali Smith
- Lepelsnijder|Marjolijn Hof
- Less|Andrew Sean Greer
- Love in the time of cholera|Gabriel García Márquez
- Lucius, of: de ezel|Lucianus
- Mens/onmens|Bas Heijne
- Mijn konijn van vaderskant|Etgar Keret
- Mijn lieve gunsteling|Marieke Lucas Rijneveld
- Moord: een inleiding|Faye Kellerman
- Moskou op sterk water|Venedikt Erofeev
- Nachttrein naar Lissabon|Pascal Mercier
- Ness|Robert Macfarlane en Stanley Donwood
- Nouveau Fuck|Stella Bergsma
- Op de rok van het universum|Tonnus Oosterhoff
- Orkaanseizoen|Fernanda Melchor
- Paarse hibiscus|Chimamanda Ngozi Adichie
- Samuel Johnson is Indignant|Lydia Davis
- Simplicissimus|Johann Grimmelshausen
- Socrates op sneakers|Elke Wiss
- Spaans Rood|Milan Hulsing
- The Best Of|Delphine Lecompte
- The Darkening Age|Catherine Nixey
- The God of Small Things |Arundhati Roy
- The Old Man and the Sea|Ernest Hemingway
- The Periodic Table|Primo Levi
- The secret language of color|Joann and Arielle Eckstut
- The Sectret Lives of Baba Segi’s Wives|Lola Shoneyin
- The Shape of Design|Frank Chimero
- Transit|Rachel Cusk
- Tsjaikovskistraat 40|Peter Waterdrinker
- Uit de maat|William M. Kelley
- Uit het leven van een hond|Sander Kollaard
- Underdog|Elfie Tromp
- Vallen is als vliegen|Manon Uphoff
- Van hier tot Tokio|Paul van Hooff
- Varieties of Disturbance|Lydia Davis
- Vertedering|Jamal Ouariachi
- Waar de wind waait|Nick Hunt
- We Have Always Lived in the Castle|Shirley Jackson
- Wij slaven van Suriname|Anton de Kom
- Wildevrouw|Jeroen Olyslaegers
- Willem die Madoc maakte|Nico Dros
- Willem Sandberg, portret van een kunstenaar|Ank Leeuw-Marcar
- Winter|Ali Smith
- Wittgensteins minnares|David Markson
- Zomer|Ali Smith
- Απ᾽ τες εννιά|Κωνσταντίνος Καβάφης
- Βάρδια|Νίκος Καβαδίας
- Δώδεκα|Νίκος Καρβέλας & Φίλιππος Νικολάου
- Η Φάρσα|Έρση Σωτηροπούλου
- Ο ήλιος του απογεύματος|Κωνσταντίνος Καβάφης
- Πολιτικό ημερολόγιο|Γιώργος Σεφέρης
- Το κιβώτιο|Άρης Αλεξάνδρου
- Το τρίτο στεφάνι|Κώστας Ταχτσής

## Licence

This work is completely based on a work that’s licenced under the [https://creativecommons.org/licenses/by-nc-sa/4.0/]( Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0) Licence). 

This means that this repository is licenced under the [https://creativecommons.org/licenses/by-nc-sa/4.0/]( Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0) Licence) as well.