# Literary Clock

Cloned from [this brilliant idea by Jaap Meijers](https://www.instructables.com/id/Literary-Clock-Made-From-E-reader/). I removed the option of hiding the source and added optional italics. I also added a few, mostly Dutch books, and cleaned up the existing entries. 

I use ` ‖ ` (non-breaking space, vertical double line, space) for line-endings in poetry.

## Ignoring older entries

You can ignore older entries by adding `#` at the start of the line. This shortens render time dramatically. You *must* uncomment all lines with the same time if you use this. For instance, if you add a new entry at 18:00, make sure to uncomment all 18:00 entries, or it will replace an older image.

For my future self who doesn’t want to find the regular expression again: 

- s: `\n([^#])`
- r: `\n#$1`

Removing all comments: 

- s: `\n[#][^#]`
- r: `\n`

## Cleaning up

Cleaning up the existing entries means that I  made quite a few of them shorter, made sure all times are used (some entries have multiple times in them), and made better use of time stamps like *before eight*, or *around eleven*.

Will update as I keep on reading.

You will need the [Libertine Fonts](http://libertine-fonts.org/show-me/).

## Books I added

- Adam|Wanda Reisel
- Almost No Memory|Lydia Davis
- Break it Down|Lydia Davis
- Calm Technology|Amber Case
- Creative Quest|Questlove
- De zangbreker|Carolina Trujillo
- De goede zoon|Rob van Essen
- De wraak van Vondel|Frank van Pamelen
- Dead Lions|Mick Herron
- Een zachte hand|Leïla Slimani
- Elektriciteit|Rob van Essen
- Foon|Marente de Moor
- Grand Hotel Europa|Ilja Leonard Pfeijffer
- Helden|Stephen Fry
- Het beroep van mijn vader|Sorj Chalandon
- Het huis van de moskee|Kader Abdolah
- Het Land|Aukelien Weverling
- Het mooiste verhaal over mijn familie|Nelleke Zandwijk
- Het pad van de gele slippers|Kader Abdolah
- Hier wonen ook mensen|Rob van Essen
- Homegoing|Yaa Gyasi
- Honderd jaar eenzaamheid|Gabriel García Márquez
- Icarië|Uwe Timm
- If Beale Street Could Talk|James Baldwin
- In alle steden|Aukelien Weverling
- Kus|Julien Ignacio
- Lanny|Max Porter
- Lepelsnijder|Marjolijn Hof
- Love in the time of cholera|Gabriel García Márquez
- Lucius, of: de ezel|Lucianus
- Moord: een inleiding|Faye Kellerman
- Nachttrein naar Lissabon|Pascal Mercier
- Samuel Johnson is Indignant|Lydia Davis
- Simplicissimus|Johann Grimmelshausen
- The Darkening Age|Catherine Nixey
- The Old Man and the Sea|Ernest Hemingway
- The secret language of color|Joann and Arielle Eckstut
- The Sectret Lives of Baba Segi’s Wives|Lola Shoneyin
- The Shape of Design|Frank Chimero
- Tsjaikovskistraat 40|Peter Waterdrinker
- Uit de maat|William M. Kelley
- Vallen is als vliegen|Manon Uphoff
- Van hier tot Tokio|Paul van Hooff
- Varieties of Disturbance|Lydia Davis
- Waar de wind waait|Nick Hunt
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