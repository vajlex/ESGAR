**ESGAR**

__Editing System for Gazetteer Annotation and Revision__

_Concept:_  Lex Berman  @vajlex

_Javascript codebase:_   Hongsu Wang  @sudoghut

_the purpose of ESGAR is to provide an update and annotation mechanism for the Temporal Gazetteer (TGAZ)._

_the main concept of ESGAR is to LOAD a read-only version of the JSON object from the TGAZ API, then to _Unlock_ and edit elements of the JSON record.   After _Locking_ the edited elements, the SAVE function is intended to save both the pre-edit version of the JSON Object, as well as the newly edited version of the JSON Object in Mysql database.  Finally, the edited elements are intended to be stored in a concatenated "annotation" text, which will flow back to the core TGAZ database along with the updates during a periodic, automated update session._


Note:  this is a revised fork of the codebase by Hongsu Wang, the original version is [here](https://github.com/sudoghut/esgarii).