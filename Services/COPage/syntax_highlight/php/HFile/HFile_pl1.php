<?php
$BEAUT_PATH = realpath(".") . "/Services/COPage/syntax_highlight/php";
if (!isset($BEAUT_PATH)) {
    return;
}
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_pl1 extends HFile
  {
      public function HFile_pl1()
      {
          $this->HFile();
          /*************************************/
          // Beautifier Highlighting Configuration File
          // IBM PL/1
          /*************************************/
          // Flags

          $this->nocase            	= "1";
          $this->notrim            	= "0";
          $this->perl              	= "0";

          // Colours

          $this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray");
          $this->quotecolour       	= "blue";
          $this->blockcommentcolour	= "green";
          $this->linecommentcolour 	= "green";

          // Indent Strings

          $this->indent            	= array();
          $this->unindent          	= array();

          // String characters and delimiters

          $this->stringchars       	= array();
          $this->delimiters        	= array("(", ")", "+", "-", "*", "/", "<", ">", "=", "!", "~", ";", ":", ".", "'", "@", "%", ",", "\"", "#", "$", "^", "&", "|", "{", "}", "?", "[", "]");
          $this->escchar           	= "";

          // Comment settings

          $this->linecommenton     	= array("--");
          $this->blockcommenton    	= array("/*");
          $this->blockcommentoff   	= array("*/");

          // Keywords (keyword mapping to colour number)

          $this->keywords          	= array(
            "CALL" => "1",
            "CHKSUCC" => "1",
            "CLOSE" => "1",
            "DCL" => "1",
            "DO" => "1",
            "END" => "1",
            "IF" => "1",
            "OPEN" => "1",
            "PUT" => "1",
            "READ" => "1",
            "AFPBDOC" => "2",
            "AFPBFLD" => "2",
            "AFPBGRP" => "2",
            "AFPBPAG" => "2",
            "AFPBPAR" => "2",
            "AFPBROW" => "2",
            "AFPBTBL" => "2",
            "AFPCARE" => "2",
            "AFPDFLD" => "2",
            "AFPDFNT" => "2",
            "AFPDROW" => "2",
            "AFPEARE" => "2",
            "AFPEDOC" => "2",
            "AFPEFLD" => "2",
            "AFPEGRP" => "2",
            "AFPEND" => "2",
            "AFPEPAG" => "2",
            "AFPEPAR" => "2",
            "AFPEROW" => "2",
            "AFPETBL" => "2",
            "AFPIOBJ" => "2",
            "AFPIOVL" => "2",
            "AFPIPSG" => "2",
            "AFPINIT" => "2",
            "AFPINVM" => "2",
            "AFPPARE" => "2",
            "AFPPBOX" => "2",
            "AFPPCHS" => "2",
            "AFPPRUL" => "2",
            "AFPPTAG" => "2",
            "AFPPTXT" => "2",
            "AFPQATT" => "2",
            "AFPQPOS" => "2",
            "AFPSCLR" => "2",
            "AFPSFNT" => "2",
            "AFPSICS" => "2",
            "AFPSLIB" => "2",
            "AFPSOUT" => "2",
            "AFPSPOS" => "2",
            "AFPSRTH" => "2",
            "AFPSUNI" => "2",
            "AFPSWSP" => "2",
            "AFPTERM" => "2",
            "AFPXARE" => "2",
            "AFP_REUSE_OPTION" => "3",
            "AFPAPI_HANDLE" => "3",
            "AFP_ALIGNMENT_CHAR" => "3",
            "AFP_ALIGNMENT_OPTION" => "3",
            "AFP_ALIGNMENT_POSITION" => "3",
            "AFP_AREA_FRAME" => "3",
            "AFP_AREA_HANDLE" => "3",
            "AFP_AREA_ROTATION" => "3",
            "AFP_AREA_WIDTH" => "3",
            "AFP_BOTTOM_THICKNESS" => "3",
            "AFP_BOT_RULE_OFFSET" => "3",
            "AFP_BOX_DEPTH" => "3",
            "AFP_BOX_WIDTH" => "3",
            "AFP_CHARACTER_SPACING" => "3",
            "AFP_CHARACTER_STRING" => "3",
            "AFP_CODE_PAGE" => "3",
            "AFP_COLOR" => "3",
            "AFP_COLUMN_WIDTH_ARRAY" => "3",
            "AFP_CONCATENATE" => "3",
            "AFP_CURRENT_HANDLE" => "3",
            "AFP_DESCRIPTIVE_NAME" => "3",
            "AFP_DESC_NAME_LENGTH" => "3",
            "AFP_DIRECTION" => "3",
            "AFP_DOCUMENT_HANDLE" => "3",
            "AFP_DOC_PAGE_DEPTH" => "3",
            "AFP_DOC_PAGE_WIDTH" => "3",
            "AFP_FIELD_ID" => "3",
            "AFP_FIRST_LINE_INDENT" => "3",
            "AFP_FIRST_LINE_OFFSET" => "3",
            "AFP_FONT_ID" => "3",
            "AFP_FONT_LIBRARY" => "3",
            "AFP_FONT_WIDTH" => "3",
            "AFP_FORMAT_OPTION" => "3",
            "AFP_GROUP_NAME" => "3",
            "AFP_INLINE_OPTION" => "3",
            "AFP_LEFT_MARGIN" => "3",
            "AFP_LEFT_THICKNESS" => "3",
            "AFP_LINE_LENGTH" => "3",
            "AFP_LINE_SPACING" => "3",
            "AFP_MAX_AREA_DEPTH" => "3",
            "AFP_MAX_TABLE_DEPTH" => "3",
            "AFP_MEDIUM_MAP_NAME" => "3",
            "AFP_MIN_SUBROW_DEPTH_ARRAY" => "3",
            "AFP_NUMBER_COLUMNS" => "3",
            "AFP_NUMBER_SUBROWS" => "3",
            "AFP_OBJECT_DEPTH" => "3",
            "AFP_OBJECT_LIBRARY" => "3",
            "AFP_OBJECT_MAPPING_OPTION" => "3",
            "AFP_OBJECT_NAME" => "3",
            "AFP_OBJECT_ROTATION" => "3",
            "AFP_OBJECT_WIDTH" => "3",
            "AFP_OBJECT_X_OFFSET" => "3",
            "AFP_OBJECT_Y_OFFSET" => "3",
            "AFP_OUTPUT_FILEMODE" => "3",
            "AFP_OUTPUT_FILENAME" => "3",
            "AFP_OUTPUT_FILETYPE" => "3",
            "AFP_OUTPUT_RECORD_SIZE" => "3",
            "AFP_OVLY_NAME" => "3",
            "AFP_PAGE_DEPTH" => "3",
            "AFP_PAGE_HANDLE" => "3",
            "AFP_PAGE_ORIENTATION" => "3",
            "AFP_PAGE_WIDTH" => "3",
            "AFP_PARAGRAPH_FRAME" => "3",
            "AFP_PARAGRAPH_HANDLE" => "3",
            "AFP_POINT_SIZE" => "3",
            "AFP_POSITION_OPTION" => "3",
            "AFP_PSEG_LIBRARY" => "3",
            "AFP_PSEG_NAME" => "3",
            "AFP_REPLACE" => "3",
            "AFP_RIGHT_MARGIN" => "3",
            "AFP_RIGHT_THICKNESS" => "3",
            "AFP_ROTATION" => "3",
            "AFP_ROW_ARRANGE_ARRAY" => "3",
            "AFP_ROW_ID" => "3",
            "AFP_RT_RULE_OFFSET" => "3",
            "AFP_RULE_LENGTH" => "3",
            "AFP_RULE_THICKNESS" => "3",
            "AFP_SHADING_INTENSITY" => "3",
            "AFP_SHADING_PATTERN" => "3",
            "AFP_STRING_LENGTH" => "3",
            "AFP_STYLE" => "3",
            "AFP_TABLE_HANDLE" => "3",
            "AFP_TABLE_ROTATION" => "3",
            "AFP_TABLE_WIDTH" => "3",
            "AFP_TAG_NAME" => "3",
            "AFP_TAG_VALUE" => "3",
            "AFP_TEXT_ORIENTATION" => "3",
            "AFP_TOP_THICKNESS" => "3",
            "AFP_TRACE" => "3",
            "AFP_UNDERLINE" => "3",
            "AFP_UNIT_OF_MEASURE" => "3",
            "AFP_VERTICAL_FORMAT" => "3",
            "AFP_WEIGHT" => "3",
            "AFP_WORD_SPACING" => "3",
            "AFP_X_COORDINATE" => "3",
            "AFP_X_REF_COORD_SYS" => "3",
            "AFP_Y_COORDINATE" => "3",
            "AFP_Y_REF_COORD_SYS" => "3",
            "AFP_ERRDATA" => "4",
            "AFP_AREA_DEPTH" => "4",
            "AFP_CURRENT_TABLE_DEPTH" => "4",
            "AFP_PARAGRAPH_DEPTH" => "4",
            "AFP_REMAINING_LENGTH" => "4",
            "AFP_REMAINING_STRING" => "4",
            "AFP_RET_CODE" => "4",
            "AFP_SEVERITY_CODE" => "4",
            "AFP_TABLE_DEPTH" => "4",
            "DO_AFPBDOC" => "5",
            "DO_AFPBFLD" => "5",
            "DO_AFPBGRP" => "5",
            "DO_AFPBPAG" => "5",
            "DO_AFPBPAR" => "5",
            "DO_AFPBROW" => "5",
            "DO_AFPBTBL" => "5",
            "DO_AFPCARE" => "5",
            "DO_AFPDFLD" => "5",
            "DO_AFPDFNT" => "5",
            "DO_AFPDROW" => "5",
            "DO_AFPEARE" => "5",
            "DO_AFPEDOC" => "5",
            "DO_AFPEFLD" => "5",
            "DO_AFPEGRP" => "5",
            "DO_AFPEND" => "5",
            "DO_AFPEPAG" => "5",
            "DO_AFPEPAR" => "5",
            "DO_AFPEROW" => "5",
            "DO_AFPETBL" => "5",
            "DO_AFPINIT" => "5",
            "DO_AFPINVM" => "5",
            "DO_AFPIOBJ" => "5",
            "DO_AFPIOVL" => "5",
            "DO_AFPIPSG" => "5",
            "DO_AFPPARE" => "5",
            "DO_AFPPBOX" => "5",
            "DO_AFPPCHS" => "5",
            "DO_AFPPRUL" => "5",
            "DO_AFPPTAG" => "5",
            "DO_AFPPTXT" => "5",
            "DO_AFPQATT" => "5",
            "DO_AFPQPOS" => "5",
            "DO_AFPSCLR" => "5",
            "DO_AFPSFNT" => "5",
            "DO_AFPSICS" => "5",
            "DO_AFPSLIB" => "5",
            "DO_AFPSOUT" => "5",
            "DO_AFPSPOS" => "5",
            "DO_AFPSRTH" => "5",
            "DO_AFPSUNI" => "5",
            "DO_AFPSWSP" => "5",
            "DO_AFPTERM" => "5",
            "DO_AFPXARE" => "5",
            "AFP_DEFAULT" => "6",
            "BLACK" => "6",
            "BLUE" => "6",
            "BOLD" => "6",
            "BROWN" => "6",
            "CENTER" => "6",
            "CENTER_AND_TRIM" => "6",
            "CHAR" => "6",
            "CM" => "6",
            "CONDENSED" => "6",
            "CYAN" => "6",
            "DEFAULT_MAP" => "6",
            "DOUBLE_DOT" => "6",
            "ERRER" => "6",
            "EXPANDED" => "6",
            "EXTRABOLD" => "6",
            "EXTRACOND" => "6",
            "EXTRAEXP" => "6",
            "EXTRALIGHT" => "6",
            "FALS" => "6",
            "FATAL" => "6",
            "FOCENTER" => "6",
            "FOJUSTIFY" => "6",
            "FOLEFT" => "6",
            "FORIGHT" => "6",
            "GREEN" => "6",
            "INCH" => "6",
            "ITALIC" => "6",
            "LIGHT" => "6",
            "L_FT" => "6",
            "MAGENTA" => "6",
            "MEDIA" => "6",
            "MEDIUM" => "6",
            "MM" => "6",
            "NOERROR" => "6",
            "NORMAL" => "6",
            "NOSHADE" => "6",
            "ORIENT0" => "6",
            "ORIENT180" => "6",
            "ORIENT270" => "6",
            "ORIENT90" => "6",
            "ORIENTDOC" => "6",
            "POINT_TO_PEL" => "6",
            "POSITION_AND_TRIM" => "6",
            "RED" => "6",
            "ROMAN" => "6",
            "ROTATE0" => "6",
            "ROTATE180" => "6",
            "ROTATE270" => "6",
            "ROTATE90" => "6",
            "ROTATE_DEFAULT" => "6",
            "R_GHT" => "6",
            "SCALE_TO_FIT" => "6",
            "SCREEN" => "6",
            "SEMIBOLD" => "6",
            "SEMICOND" => "6",
            "SEMIEXP" => "6",
            "SEMILIGHT" => "6",
            "SEVERE" => "6",
            "STNDARD" => "6",
            "TRU" => "6",
            "TXTOR0_0" => "6",
            "TXTOR180_270" => "6",
            "TXTOR270_0" => "6",
            "TXTOR90_180" => "6",
            "U1440" => "6",
            "U240" => "6",
            "ULTRABOLD" => "6",
            "ULTRACOND" => "6",
            "ULTRAEXP" => "6",
            "ULTRALIGHT" => "6",
            "VERBOTTOM" => "6",
            "VERCENTER" => "6",
            "VERTOP" => "6",
            "WARNING" => "6",
            "XABS" => "6",
            "XDIRECTION" => "6",
            "XREL" => "6",
            "YABS" => "6",
            "YDIRECTION" => "6",
            "YELLOW" => "6",
            "YLINES" => "6",
            "YREL" => "6",
            "ER_ABORT" => "7",
            "ER_APARENT" => "7",
            "ER_APPLMEM" => "7",
            "ER_AREAMEM" => "7",
            "ER_AREANOTFND" => "7",
            "ER_AREA_OFF_PAGE" => "7",
            "ER_ATTSMEM" => "7",
            "ER_BACK" => "7",
            "ER_BEGGRP" => "7",
            "ER_BEGINFLD" => "7",
            "ER_BEGINROW" => "7",
            "ER_BLKMEM" => "7",
            "ER_BLKTYPE" => "7",
            "ER_CODEPAGE" => "7",
            "ER_CREATEPARA" => "7",
            "ER_CREATETABLE" => "7",
            "ER_DCFFENV" => "7",
            "ER_DCFMEM" => "7",
            "ER_DCFPOS" => "7",
            "ER_DEFFIELD" => "7",
            "ER_DEFFONT" => "7",
            "ER_DEFROW" => "7",
            "ER_DEPTH_EXCEEDED" => "7",
            "ER_DOCEXISTS" => "7",
            "ER_DPARENT" => "7",
            "ER_END" => "7",
            "ER_ENDDOC" => "7",
            "ER_ENDFLD" => "7",
            "ER_ENDGRP" => "7",
            "ER_ENDPAGE" => "7",
            "ER_ENDPARA" => "7",
            "ER_ENDROW" => "7",
            "ER_ENDTABLE" => "7",
            "ER_END_OF_PAGE" => "7",
            "ER_FAIL" => "7",
            "ER_FIELDNDEF" => "7",
            "ER_FIELDNOTFND" => "7",
            "ER_FLDATSMEM" => "7",
            "ER_FLDMEM" => "7",
            "ER_FONTATSMEM" => "7",
            "ER_FONTDEFS" => "7",
            "ER_FONTINDEX" => "7",
            "ER_FONTMEM" => "7",
            "ER_FONTNOTFND" => "7",
            "ER_FONTSIZE" => "7",
            "ER_FORMATTER_ABEND" => "7",
            "ER_INCOBJ" => "7",
            "ER_INCOVLY" => "7",
            "ER_INCPSEG" => "7",
            "ER_INULLPTR" => "7",
            "ER_INVFONT" => "7",
            "ER_INVMM" => "7",
            "ER_INVPSEG" => "7",
            "ER_INVSUBROW" => "7",
            "ER_IVALIGN" => "7",
            "ER_IVAREALEN" => "7",
            "ER_IVAREAROT" => "7",
            "ER_IVAREAWID" => "7",
            "ER_IVARSHADE" => "7",
            "ER_IVARSHINT" => "7",
            "ER_IVBLKP" => "7",
            "ER_IVBLOCK" => "7",
            "ER_IVBOXDEPTH" => "7",
            "ER_IVBOXWIDTH" => "7",
            "ER_IVBXSHADE" => "7",
            "ER_IVBXSHINT" => "7",
            "ER_IVCODEPG" => "7",
            "ER_IVCOLOR" => "7",
            "ER_IVCOLORP" => "7",
            "ER_IVCOLWID" => "7",
            "ER_IVCONTROL" => "7",
            "ER_IVCSPACE" => "7",
            "ER_IVCSPACEP" => "7",
            "ER_IVDATAS" => "7",
            "ER_IVDDNAME" => "7",
            "ER_IVDEPTH" => "7",
            "ER_IVDESCLEN" => "7",
            "ER_IVDESCNM" => "7",
            "ER_IVDIRECTION" => "7",
            "ER_IVFLDBOT" => "7",
            "ER_IVFLDFR" => "7",
            "ER_IVFLDLFT" => "7",
            "ER_IVFLDOR" => "7",
            "ER_IVFLDRGHT" => "7",
            "ER_IVFMODE" => "7",
            "ER_IVFONT" => "7",
            "ER_IVFONTID" => "7",
            "ER_IVFONTLIB" => "7",
            "ER_IVFONTROT" => "7",
            "ER_IVFORMAT" => "7",
            "ER_IVGRPNAME" => "7",
            "ER_IVHOR" => "7",
            "ER_IVINLINE" => "7",
            "ER_IVLINESP" => "7",
            "ER_IVLMAR" => "7",
            "ER_IVLTHICK" => "7",
            "ER_IVNUMCOLS" => "7",
            "ER_IVNUMROWS" => "7",
            "ER_IVOBJDEPTH" => "7",
            "ER_IVOBJLIB" => "7",
            "ER_IVOBJMAP" => "7",
            "ER_IVOBJROT" => "7",
            "ER_IVOBJWIDTH" => "7",
            "ER_IVOBJXPOS" => "7",
            "ER_IVOBJYPOS" => "7",
            "ER_IVOUTDS" => "7",
            "ER_IVPARABOF" => "7",
            "ER_IVPARADEP" => "7",
            "ER_IVPARAFORM" => "7",
            "ER_IVPARAIND" => "7",
            "ER_IVPARALEN" => "7",
            "ER_IVPARALOF" => "7",
            "ER_IVPARALSP" => "7",
            "ER_IVPARAMAR" => "7",
            "ER_IVPARAOFF" => "7",
            "ER_IVPGDEP" => "7",
            "ER_IVPGWID" => "7",
            "ER_IVPRSHADE" => "7",
            "ER_IVPRSHINT" => "7",
            "ER_IVPSEGLIB" => "7",
            "ER_IVPTSIZE" => "7",
            "ER_IVREQUEST" => "7",
            "ER_IVRMAR" => "7",
            "ER_IVROTATE" => "7",
            "ER_IVROWDEP" => "7",
            "ER_IVROWFR" => "7",
            "ER_IVROWID" => "7",
            "ER_IVRULELEN" => "7",
            "ER_IVSHADE" => "7",
            "ER_IVSHINT" => "7",
            "ER_IVSPACE" => "7",
            "ER_IVSTRLEN" => "7",
            "ER_IVSTYLE" => "7",
            "ER_IVTABLDEP" => "7",
            "ER_IVTABLEROT" => "7",
            "ER_IVTAGNAME" => "7",
            "ER_IVTAGVALUE" => "7",
            "ER_IVTBLBOT" => "7",
            "ER_IVTBLLFT" => "7",
            "ER_IVTBLRGHT" => "7",
            "ER_IVTBLTOP" => "7",
            "ER_IVTHICK" => "7",
            "ER_IVTYPE" => "7",
            "ER_IVUNITP" => "7",
            "ER_IVUNITS" => "7",
            "ER_IVVER" => "7",
            "ER_IVWEIGHT" => "7",
            "ER_IVWIDTH" => "7",
            "ER_IVWSPACE" => "7",
            "ER_IVXPOS" => "7",
            "ER_IVXPOSP" => "7",
            "ER_IVXREF" => "7",
            "ER_IVYPOS" => "7",
            "ER_IVYPOSP" => "7",
            "ER_IVYREF" => "7",
            "ER_LINELEN_OVERF" => "7",
            "ER_LOADMOD" => "7",
            "ER_MARG_OVERF" => "7",
            "ER_MBAREA" => "7",
            "ER_NEGATIVE" => "7",
            "ER_NESTGRPS" => "7",
            "ER_NOACTGRP" => "7",
            "ER_NOATTPTR" => "7",
            "ER_NOATTS" => "7",
            "ER_NOBEGGRP" => "7",
            "ER_NOCURSOR" => "7",
            "ER_NOFLDPTR" => "7",
            "ER_NOFONTPTR" => "7",
            "ER_NOROWPTR" => "7",
            "ER_NOTACST" => "7",
            "ER_NOTACT" => "7",
            "ER_NOTACT_BGRP" => "7",
            "ER_NOTACT_DEF" => "7",
            "ER_NOTACT_EFLD" => "7",
            "ER_NOTACT_EGRP" => "7",
            "ER_NOTACT_EPAR" => "7",
            "ER_NOTACT_EROW" => "7",
            "ER_NOTACT_ETBL" => "7",
            "ER_NOTACT_INC" => "7",
            "ER_NOTACT_INCOBJ" => "7",
            "ER_NOTACT_INCPS" => "7",
            "ER_NOTACT_INVMM" => "7",
            "ER_NOTACT_MOV" => "7",
            "ER_NOTACT_OUT" => "7",
            "ER_NOTACT_PTAG" => "7",
            "ER_NOTACT_PUT" => "7",
            "ER_NOTACT_PUTA" => "7",
            "ER_NOTACT_PUTD" => "7",
            "ER_NOTACT_PUTF" => "7",
            "ER_NOTACT_PUTL" => "7",
            "ER_NOTACT_SBOX" => "7",
            "ER_NOTACT_SET" => "7",
            "ER_NOTACT_SETCOL" => "7",
            "ER_NOTACT_SETISP" => "7",
            "ER_NOTACT_SETWSP" => "7",
            "ER_NOTACT_SFLD" => "7",
            "ER_NOTACT_SLIBS" => "7",
            "ER_NOTACT_SROW" => "7",
            "ER_NOTEND" => "7",
            "ER_NOTENDED" => "7",
            "ER_NOTFOUND" => "7",
            "ER_NOTINIT" => "7",
            "ER_NOTSTRT" => "7",
            "ER_NO_DEFINITION" => "7",
            "ER_NO_FORMATTER_HANDLE" => "7",
            "ER_NO_OBJECT" => "7",
            "ER_NO_SHADE" => "7",
            "ER_NO_STORAGE" => "7",
            "ER_NULLCONTROL" => "7",
            "ER_NULLPTR" => "7",
            "ER_OFF_PAGE" => "7",
            "ER_OVERFLOW" => "7",
            "ER_PAGEXISTS" => "7",
            "ER_PARAEXISTS" => "7",
            "ER_PPARENT" => "7",
            "ER_PUTAREA" => "7",
            "ER_PUTBOX" => "7",
            "ER_PUTLINE" => "7",
            "ER_PUTSTR" => "7",
            "ER_PUTTAG" => "7",
            "ER_PUTTEXT" => "7",
            "ER_QATTS" => "7",
            "ER_QFONT_NOTFOUND" => "7",
            "ER_READ_LIB" => "7",
            "ER_REPLACE" => "7",
            "ER_ROWATSMEM" => "7",
            "ER_ROWMEM" => "7",
            "ER_ROWNOTFND" => "7",
            "ER_ROW_TOO_DEEP" => "7",
            "ER_SETCOLOR" => "7",
            "ER_SETCSPAC" => "7",
            "ER_SETFONT" => "7",
            "ER_SETLIBS" => "7",
            "ER_SETLTHCK" => "7",
            "ER_SETOUT" => "7",
            "ER_SETPGOR" => "7",
            "ER_SETUNITS" => "7",
            "ER_SETWORDSP" => "7",
            "ER_STARTFONT" => "7",
            "ER_TABLEXISTS" => "7",
            "ER_TERM" => "7",
            "ER_TOO_BIG" => "7",
            "ER_TOO_WIDE" => "7",
            "ER_TRACE" => "7",
            "ER_WRITE_OUTPUT" => "7");

          // Special extensions

          // Each category can specify a PHP function that returns an altered
          // version of the keyword.
        
        

          $this->linkscripts    	= array(
            "1" => "donothing",
            "2" => "donothing",
            "3" => "donothing",
            "4" => "donothing",
            "5" => "donothing",
            "6" => "donothing",
            "7" => "donothing");
      }


      public function donothing($keywordin)
      {
          return $keywordin;
      }
  }