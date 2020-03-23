<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_inform6 extends HFile
  {
      public function HFile_inform6()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // Inform 6
          /*************************************/
          // Flags

          $this->nocase            	= "0";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "blue", "gray", "brown", "purple", "gray", "brown");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array("'");
          $this->delimiters        	= array("~", "!", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("");
          $this->blockcommenton    	= array("\"");
          $this->blockcommentoff   	= array("\"");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "Below" => "",
            "is" => "",
            "a" => "",
            "brand-new" => "",
            "UltraEdit" => "",
            "word" => "",
            "file" => "",
            "for" => "1",
            "Inform" => "",
            "6." => "",
            "Since" => "",
            "doesn\'t" => "",
            "yet" => "",
            "support" => "",
            "multi-line" => "",
            "string" => "1",
            "coloring," => "",
            "I" => "",
            "have" => "",
            "hacked" => "",
            "around" => "",
            "that" => "",
            "by" => "",
            "defining" => "",
            "strings" => "",
            "as" => "",
            "the" => "6",
            "default" => "5",
            "block" => "",
            "comment," => "",
            "which" => "",
            "lacks" => "",
            "anyway." => "",
            "However," => "",
            "this" => "",
            "means" => "",
            "any" => "",
            "enclosed" => "",
            "\"" => "",
            "must" => "",
            "be" => "",
            "preceded" => "",
            "with" => "1",
            "space," => "",
            "i.e." => "",
            "print" => "1",
            "\"Hello," => "",
            "world^^" => "",
            "You" => "",
            "died\";" => "",
            "will" => "",
            "work," => "",
            "but" => "",
            "Format(\"Hello" => "",
            "World\");" => "",
            "not." => "",
            "To" => "",
            "use" => "",
            "syntax" => "",
            "coloring" => "",
            "mode," => "",
            "cut-and-paste" => "",
            "all" => "",
            "below" => "",
            "\"dotted" => "",
            "line\"" => "",
            "and" => "",
            "drop" => "",
            "it" => "",
            "into" => "",
            "your" => "",
            "WORDFILE.TXT." => "",
            "Depending" => "",
            "on" => "3",
            "how" => "",
            "few/many" => "",
            "languages" => "",
            "you" => "",
            "defined," => "",
            "might" => "",
            "to" => "1",
            "change" => "",
            "\"/L10\"" => "",
            "an" => "",
            "unused" => "",
            "number." => "",
            "Also" => "",
            "note" => "",
            "definition" => "",
            "(starting" => "",
            "\"/L10\")" => "",
            "*all*" => "",
            "*on*" => "",
            "*one*" => "",
            "*line*" => "",
            "up" => "",
            "including" => "",
            "\"File" => "",
            "Extensions" => "",
            "=" => "4",
            "H" => "",
            "INF" => "",
            "INC\"" => "",
            "or" => "1",
            "won\'t" => "",
            "work." => "",
            "Starting" => "",
            "7.0," => "",
            "possible" => "",
            "bold/italic" => "",
            "text" => "",
            "highlighting." => "",
            "For" => "",
            "reference," => "",
            "following" => "",
            "settings" => "",
            "in" => "1",
            "itself," => "",
            "white:" => "",
            "Normal" => "",
            "Text" => "",
            "RGB" => "",
            "000/000/000" => "",
            "Comments" => "",
            "128/128/128," => "",
            "italic" => "",
            "(that\'s" => "",
            "comments" => "",
            "\"\"-Strings)" => "",
            "Strings" => "",
            "\'\'-Strings)" => "",
            "Numbers" => "",
            "255/000/000" => "",
            "Statemts/Routines" => "",
            "000/000/255" => "",
            "Directives" => "",
            "Attributes" => "",
            "255/128/000" => "",
            "Properties/Ops" => "",
            "000/128/000" => "",
            "Verb" => "2",
            "actions" => "",
            "128/064/064" => "",
            "Grammar" => "",
            "Assembler" => "",
            "128/128/000" => "",
            "Miscellaneous" => "",
            "128/000/255" => "",
            "Alt" => "",
            "Block" => "",
            "(not" => "",
            "used)" => "",
            "If" => "",
            "find" => "",
            "useful" => "",
            "library" => "",
            "routines," => "",
            "constants" => "",
            "anything" => "",
            "else" => "1",
            "I\'ve" => "",
            "missed," => "",
            "if" => "1",
            "at" => "",
            "all," => "",
            "contact" => "",
            "me!" => "",
            "Version" => "2",
            "2.19991202" => "",
            "Gunther" => "",
            "Schmidl" => "",
            "<gschmidl@gmx.at>" => "",
            "history:" => "",
            "Minor" => "",
            "additions" => "",
            "(AfterRoutines," => "",
            "ValueOrRun," => "",
            "RunRoutines)" => "",
            "fixes" => "",
            "(moved" => "",
            "\'NULL\'" => "",
            "C8," => "",
            "removed" => "",
            "\'a\')" => "",
            "1.19991201" => "",
            "Initial" => "",
            "release;" => "",
            "statements," => "",
            "routines" => "",
            "etc." => "",
            "culled" => "",
            "from" => "",
            "DM." => "",
            "---cut" => "",
            "here---cut" => "",
            "here---" => "",
            "AfterLife" => "1",
            "AfterPrompt" => "1",
            "Amusing" => "1",
            "Achieved" => "1",
            "AddToScope" => "1",
            "AllowPushDir" => "1",
            "AfterRoutines" => "1",
            "box" => "1",
            "break" => "1",
            "bold" => "1",
            "BeforeParsing" => "1",
            "class" => "1",
            "continue" => "1",
            "child" => "1",
            "children" => "1",
            "ChangePlayer" => "1",
            "ChangeDefault" => "1",
            "ChooseObjects" => "1",
            "CDefArt" => "1",
            "do" => "1",
            "DeathMessage" => "1",
            "DarkToDark" => "1",
            "DoMenu" => "1",
            "DefArt" => "1",
            "EnglishNumber" => "1",
            "font" => "1",
            "fixed" => "1",
            "give" => "1",
            "GamePostRoutine" => "1",
            "GamePreRoutine" => "1",
            "has" => "1",
            "hasnt" => "1",
            "HasLightSource" => "1",
            "indirect" => "1",
            "inversion" => "1",
            "InScope" => "1",
            "InDefArt" => "1",
            "Initialise" => "1",
            "jump" => "1",
            "LookRoutine" => "1",
            "Locale" => "1",
            "LoopOverScope" => "1",
            "metaclass" => "1",
            "move" => "1",
            "new_line" => "1",
            "near" => "1",
            "notin" => "1",
            "nothing" => "1",
            "NextWord" => "1",
            "NextWordStopped" => "1",
            "NounDomain" => "1",
            "NewRoom" => "1",
            "objectloop" => "1",
            "ofclass" => "1",
            "ObjectIsUntouchable" => "1",
            "OffersLight" => "1",
            "print_ret" => "1",
            "print_to_array" => "1",
            "parent" => "1",
            "provides" => "1",
            "PlayerTo" => "1",
            "PrintRank" => "1",
            "PrintTaskName" => "1",
            "ParseNoun" => "1",
            "ParseNumber" => "1",
            "PlaceInScope" => "1",
            "PrononValue" => "1",
            "PronounNotice" => "1",
            "ParserError" => "1",
            "PrintShortName" => "1",
            "PrintVerb" => "1",
            "quit" => "1",
            "random" => "1",
            "read" => "1",
            "remove" => "1",
            "restore" => "1",
            "return" => "1",
            "rfalse" => "1",
            "rtrue" => "1",
            "roman" => "1",
            "reverse" => "1",
            "RunRoutines" => "1",
            "save" => "1",
            "spaces" => "1",
            "style" => "1",
            "switch" => "1",
            "sibling" => "1",
            "sender" => "1",
            "StartDaemon" => "1",
            "StopDaemon" => "1",
            "StartTimer" => "1",
            "StopTimer" => "1",
            "Statusline" => "1",
            "SetTime" => "1",
            "ScopeWithin" => "1",
            "SetPronoun" => "1",
            "The" => "1",
            "TestScope" => "1",
            "TryNumber" => "1",
            "TimePasses" => "1",
            "until" => "1",
            "underline" => "1",
            "UnknownVerb" => "1",
            "UnsignedCompare" => "1",
            "ValueOrRun" => "1",
            "while" => "1",
            "WriteListFrom" => "1",
            "WordAddress" => "1",
            "WordLength" => "1",
            "YesOrNo" => "1",
            "ZRegion" => "1",
            "**" => "7",
            "#" => "2",
            "Abbreviate" => "2",
            "Array" => "2",
            "Attribute" => "2",
            "Class" => "2",
            "Constant" => "2",
            "Default" => "2",
            "Dictionary" => "2",
            "End" => "2",
            "Endif" => "2",
            "Extend" => "2",
            "endif" => "2",
            "Fake_action" => "2",
            "Global" => "2",
            "Ifdef" => "2",
            "Ifndef" => "2",
            "Ifnot" => "2",
            "Iftrue" => "2",
            "Iffalse" => "2",
            "Import" => "2",
            "Include" => "2",
            "Ifv3" => "2",
            "Ifv5" => "2",
            "ifdef" => "2",
            "ifndef" => "2",
            "ifnot" => "2",
            "iftrue" => "2",
            "iffalse" => "2",
            "ifv3" => "2",
            "ifv5" => "2",
            "Link" => "2",
            "Lowstring" => "2",
            "Message" => "2",
            "Nearby" => "2",
            "Object" => "2",
            "Property" => "2",
            "Release" => "2",
            "Replace" => "2",
            "Routine" => "2",
            "Serial" => "2",
            "Switches" => "2",
            "System_file" => "2",
            "Stub" => "2",
            "String" => "2",
            "Trace" => "2",
            "absent" => "3",
            "animate" => "3",
            "creature" => "3",
            "clothing" => "3",
            "concealed" => "3",
            "container" => "3",
            "edible" => "3",
            "enterable" => "3",
            "female" => "3",
            "general" => "3",
            "held" => "3",
            "light" => "3",
            "lockable" => "3",
            "locked" => "3",
            "male" => "3",
            "moved" => "3",
            "neuter" => "3",
            "open" => "3",
            "openable" => "3",
            "pluralname" => "3",
            "proper" => "3",
            "scenery" => "3",
            "scored" => "3",
            "static" => "3",
            "supporter" => "3",
            "switchable" => "3",
            "talkable" => "3",
            "transparent" => "3",
            "visited" => "3",
            "workflag" => "3",
            "worn" => "3",
            "~" => "4",
            "." => "4",
            ":" => "4",
            ";" => "4",
            "," => "4",
            "-" => "4",
            ">" => "4",
            "<" => "4",
            "&" => "4",
            "|" => "4",
            "(" => "4",
            ")" => "4",
            "[" => "4",
            "]" => "4",
            "{" => "4",
            "}" => "4",
            "+" => "4",
            "*" => "4",
            "//" => "4",
            "/" => "4",
            "add_to_scope" => "4",
            "after" => "4",
            "article" => "4",
            "articles" => "4",
            "before" => "4",
            "cant_go" => "4",
            "capacity" => "4",
            "create" => "4",
            "copy" => "4",
            "call" => "4",
            "door" => "4",
            "daemon" => "4",
            "describe" => "4",
            "description" => "4",
            "door_dir" => "4",
            "door_to" => "4",
            "d_to" => "4",
            "destroy" => "4",
            "each_turn" => "4",
            "e_to" => "4",
            "found_in" => "4",
            "initial" => "4",
            "inside_description" => "4",
            "invent" => "4",
            "in_to" => "4",
            "grammar" => "4",
            "life" => "4",
            "list_together" => "4",
            "name" => "4",
            "number" => "4",
            "n_to" => "4",
            "nw_to" => "4",
            "ne_to" => "4",
            "orders" => "4",
            "out_to" => "4",
            "parse_name" => "4",
            "plural" => "4",
            "private" => "4",
            "react_after" => "4",
            "react_before" => "4",
            "recreate" => "4",
            "remaining" => "4",
            "short_name" => "4",
            "short_name_indef" => "4",
            "s_to" => "4",
            "se_to" => "4",
            "sw_to" => "4",
            "time_left" => "4",
            "time_out" => "4",
            "u_to" => "4",
            "when_closed" => "4",
            "when_open" => "4",
            "when_off" => "4",
            "when_on" => "4",
            "with_key" => "4",
            "w_to" => "4",
            "##" => "5",
            "ActionsOn" => "5",
            "ActionsOff" => "5",
            "Attack" => "5",
            "Answer" => "5",
            "Ask" => "5",
            "AskFor" => "5",
            "Burn" => "5",
            "Blow" => "5",
            "Buy" => "5",
            "CommandsOn" => "5",
            "CommandsOff" => "5",
            "CommandsRead" => "5",
            "Close" => "5",
            "Consult" => "5",
            "Cut" => "5",
            "Climb" => "5",
            "Drop" => "5",
            "Disrobe" => "5",
            "Dig" => "5",
            "Drink" => "5",
            "Empty" => "5",
            "Enter" => "5",
            "Exit" => "5",
            "Examine" => "5",
            "Eat" => "5",
            "Fullscore" => "5",
            "Fill" => "5",
            "Goto" => "5",
            "Gonear" => "5",
            "GetOff" => "5",
            "Go" => "5",
            "GoIn" => "5",
            "Give" => "5",
            "Inv" => "5",
            "InvTall" => "5",
            "InvWide" => "5",
            "Insert" => "5",
            "Jump" => "5",
            "JumpOver" => "5",
            "Kiss" => "5",
            "LMode1" => "5",
            "LMode2" => "5",
            "LMode3" => "5",
            "Look" => "5",
            "Lock" => "5",
            "Listen" => "5",
            "LookUnder" => "5",
            "LetGo" => "5",
            "Mild" => "5",
            "Miscellany" => "5",
            "NotifyOn" => "5",
            "NotifyOff" => "5",
            "No" => "5",
            "NotUnderstood" => "5",
            "Objects" => "5",
            "Open" => "5",
            "Order" => "5",
            "Pronouns" => "5",
            "Places" => "5",
            "Predictable" => "5",
            "PutOn" => "5",
            "Pray" => "5",
            "Pull" => "5",
            "Push" => "5",
            "PushDir" => "5",
            "PluralFound" => "5",
            "Prompt" => "5",
            "Quit" => "5",
            "Restart" => "5",
            "Restore" => "5",
            "RoutinesOn" => "5",
            "RoutinesOff" => "5",
            "Read" => "5",
            "Remove" => "5",
            "Rub" => "5",
            "Receive" => "5",
            "Save" => "5",
            "SciptOn" => "5",
            "ScriptOff" => "5",
            "Score" => "5",
            "Scope" => "5",
            "Search" => "5",
            "Show" => "5",
            "SwitchOn" => "5",
            "SwitchOff" => "5",
            "Smell" => "5",
            "Sorry" => "5",
            "Strong" => "5",
            "Swim" => "5",
            "Swing" => "5",
            "Set" => "5",
            "SetTo" => "5",
            "Squeeze" => "5",
            "Sing" => "5",
            "Sleep" => "5",
            "TraceOn" => "5",
            "TraceOff" => "5",
            "TraceLevel" => "5",
            "TimersOn" => "5",
            "TimersOff" => "5",
            "Transfer" => "5",
            "Think" => "5",
            "Taste" => "5",
            "Touch" => "5",
            "Tie" => "5",
            "Turn" => "5",
            "ThrowAt" => "5",
            "ThrownAt" => "5",
            "TheSame" => "5",
            "Take" => "5",
            "Tell" => "5",
            "Unlock" => "5",
            "VagueGo" => "5",
            "VagueSay" => "5",
            "Verify" => "5",
            "Wear" => "5",
            "Wake" => "5",
            "WakeOther" => "5",
            "Wave" => "5",
            "WaveHands" => "5",
            "Wait" => "5",
            "Xpurloin" => "5",
            "Xabstract" => "5",
            "Xtree" => "5",
            "Yes" => "5",
            "first" => "6",
            "last" => "6",
            "multi" => "6",
            "multiheld" => "6",
            "multiexcept" => "6",
            "multiinside" => "6",
            "meta" => "6",
            "noun" => "6",
            "only" => "6",
            "replace" => "6",
            "scope" => "6",
            "special" => "6",
            "second" => "6",
            "topic" => "6",
            "@" => "7",
            "action" => "8",
            "AMUSING_PROVIDED" => "8",
            "ALWAYS_BIT" => "8",
            "ANIMA_PE" => "8",
            "ASKSCOPE_PE" => "8",
            "compass" => "8",
            "CONCEAL_BIT" => "8",
            "CANTSEE_PE" => "8",
            "d_obj" => "8",
            "deadflag" => "8",
            "DEFART_BIT" => "8",
            "DEBUG" => "8",
            "e_obj" => "8",
            "ENGLISH_BIT" => "8",
            "EACHTURN_REASON" => "8",
            "EXCEPT_PE" => "8",
            "FULLINV_BIT" => "8",
            "Headline" => "8",
            "in_obj" => "8",
            "inventory_stage" => "8",
            "item_name" => "8",
            "item_width" => "8",
            "INDENT_BIT" => "8",
            "ISARE_BIT" => "8",
            "ITGONE_PE" => "8",
            "InformLibrary" => "8",
            "InformParser" => "8",
            "JUNKAFTER_PE" => "8",
            "LibraryMessages" => "8",
            "LOOPOVERSCOPE_REASON" => "8",
            "moves" => "8",
            "menu_item" => "8",
            "MAX_CARRIED" => "8",
            "MAX_SCORE" => "8",
            "MAX_TIMERS" => "8",
            "MANUAL_PRONOUNS" => "8",
            "MULTI_PE" => "8",
            "MMULTI_PE" => "8",
            "n_obj" => "8",
            "ne_obj" => "8",
            "nw_obj" => "8",
            "NULL" => "8",
            "NUMBER_TASKS" => "8",
            "NO_PLACES" => "8",
            "NEWLINE_BIT" => "8",
            "NUMBER_PE" => "8",
            "NOTHELD_PE" => "8",
            "NOTHING_PE" => "8",
            "out_obj" => "8",
            "OBJECT_SCORE" => "8",
            "player" => "8",
            "parser_action" => "8",
            "parser_one" => "8",
            "parser_two" => "8",
            "parsed_number" => "8",
            "PARTINV_BIT" => "8",
            "PARSING_REASON" => "8",
            "real_location" => "8",
            "ROOM_SCORE" => "8",
            "RECURSE_BIT" => "8",
            "REACT_BEFORE_REASON" => "8",
            "REACT_AFTER_REASON" => "8",
            "s_obj" => "8",
            "sw_obj" => "8",
            "se_obj" => "8",
            "score" => "8",
            "self" => "8",
            "selfobj" => "8",
            "SACK_OBJECT" => "8",
            "STUCK_PE" => "8",
            "SCENERY_PE" => "8",
            "Story" => "8",
            "time" => "8",
            "thedark" => "8",
            "TASKS_PROVIDED" => "8",
            "TERSE_BIT" => "8",
            "TALKING_REASON" => "8",
            "TESTSCOPE_REASON" => "8",
            "TOOLIT_PE" => "8",
            "TOOFEW_PE" => "8",
            "u_obj" => "8",
            "UPTO_PE" => "8",
            "VAGUE_PE" => "8",
            "VERB_PE" => "8",
            "w_obj" => "8",
            "WORKFLAG_BIT" => "8",
            "WITHOUT_DIRECTIONS" => "8");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "" => "donothing",
            "1" => "donothing",
            "6" => "donothing",
            "5" => "donothing",
            "3" => "donothing",
            "4" => "donothing",
            "2" => "donothing",
            "7" => "donothing",
            "8" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }