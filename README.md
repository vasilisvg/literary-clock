# Literary Clock

Cloned from [this brilliant idea by Jaap Meijers](https://www.instructables.com/id/Literary-Clock-Made-From-E-reader/). I removed the option of hiding the source and added optional italics. I also added a few, mostly Dutch books, and cleaned up the existing entries. 

## Ignoring older entries

You can ignore older entries by adding `#` at the start of the line. This shortens render time dramatically. You *must* uncomment all lines with the same time if you use this. For instance, if you add a new entry at 18:00, make sure to uncomment all 18:00 entries, or it will replace an older image.

For my future self who doesn’t want to find the regular expression again: 

- s: `\n([^#])`
- r: `\n#$1`

Removing all comments: 

- s: `\n[#]`
- r: `\n`

## Cleaning up

Cleaning up the existing entries means that I made quite a few of them shorter, made sure all times are used (some entries have multiple times in them), and made better use of time stamps like *before eight*, or *around eleven*.

Will update as I keep on reading.

You will need the [Libertine Fonts](http://libertine-fonts.org/show-me/).

## Books I added

- Almost No Memory|Lydia Davis
- Break it Down|Lydia Davis
- Calm Technology|Amber Case
- Creative Quest|Questlove
- De zangbreker|Carolina Trujillo
- Een zachte hand|Leïla Slimani
- Foon|Marente de Moor
- Grand Hotel Europa|Ilja Leonard Pfeijffer
- Het Land|Aukelien Weverling
- Het mooiste verhaal over mijn familie|Nelleke Zandwijk
- Icarië|Uwe Timm
- In alle steden|Aukelien Weverling
- Kus|Julien Ignacio
- Samuel Johnson is Indignant|Lydia Davis
- Simplicissimus|Johann Grimmelshausen
- The Darkening Age|Catherine Nixey
- The secret language of color|Joann and Arielle Eckstut
- The Shape of Design|Frank Chimero
- Tsjaikovskistraat 40|Peter Waterdrinker
- Van hier tot Tokio|Paul van Hooff
- Varieties of Disturbance|Lydia Davis
- Waar de wind waait|Nick Hunt
