<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 */

$charset = 'dos-866';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '��', '��', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$timespanfmt = '%s ����, %s �ᮢ, %s ����� � %s ᥪ㭤';

$strAPrimaryKey = '�� �������� ��ࢨ�� ���� � %s';
$strAbortedClients = '�⬥����';
$strAccessDenied = '� ����㯥 �⪠����';
$strAction = '����⢨�';
$strAddDeleteColumn = '��������/㤠���� �⮫��� �����';
$strAddDeleteRow = '��������/㤠���� �� �����';
$strAddNewField = '�������� ����� ����';
$strAddPriv = '�������� ���� �ਢ������';
$strAddPrivMessage = '�뫠 ��������� ����� �ਢ������';
$strAddSearchConditions = '�������� �᫮��� ���᪠ (⥫� ��� �᫮��� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;�������(�)';
$strAddUser = '�������� ������ ���짮��⥫�';
$strAddUserMessage = '�� �������� ���� ���짮��⥫�.';
$strAffectedRows = '���஭��� ���:';
$strAfter = '��᫥ %s';
$strAfterInsertBack = '������';
$strAfterInsertNewInsert = '��⠢��� ����� ������';
$strAll = '��';
$strAllTableSameWidth = '�������� �� ⠡���� � ⠪�� �ਭ��?';
$strAlterOrderBy = '�������� ���冷� ⠡����';
$strAnIndex = '�� �������� ������ ��� %s';
$strAnalyzeTable = '������ ⠡����';
$strAnd = '�';
$strAny = '��';
$strAnyColumn = '�� �������';
$strAnyDatabase = '�� ���� ������';
$strAnyHost = '�� ���';
$strAnyTable = '�� ⠡���';
$strAnyUser = '�� ���짮��⥫�';
$strAscending = '�� �����⠭��';
$strAtBeginningOfTable = '� ��砫� ⠡����';
$strAtEndOfTable = '� ����� ⠡����';
$strAttr = '��ਡ���';

$strBack = '�����';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' ������ ';
$strBinaryDoNotEdit = ' ������ ����� - �� ।��������� ';
$strBookmarkDeleted = '�������� �뫠 㤠����.';
$strBookmarkLabel = '��⪠';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���쪮 ��ᬮ��';
$strBrowse = '�����';
$strBzError = 'phpMyAdmin �� ����� ᦠ�� ���� ��-�� �஡��� � Bz2 extension � ⥪�饩 ���ᨨ PHP. ��ண� ४��������� ��⠭����� ��६����� <code>$cfg[\'BZipDump\']</code> � ��襬 ���䨣��樮���� 䠩�� phpMyAdmin ���祭�� <code>FALSE</code>. �᫨ �� ��� �ᯮ�짮���� Bz2-��������, ��� ����室��� �������� PHP. ������ PHP bug report %s ��� ����� ���஡��� ���ଠ樨.';
$strBzip = '��娢�஢��� � bzip';

$strCannotLogin = '���������� ���� � MySQL';
$strCantLoadMySQL = '���७�� MySQL �� ����㦥��,<br />�஢���� ���䨣���� PHP.';
$strCantLoadRecodeIconv = '�� ���� ����㧨�� iconv ��� recode, ����室��� ��� ��४���஢���� ᨬ�����. �஢���� php-���䨣���� � ࠧ��� �� �ᯮ�짮����� ��� ������ ��४���஢���� ᨬ����� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ��२�������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� �ᯮ�짮���� iconv �㭪樨: �� libiconv, �� recode_string, ���� �� ���� ����㦥�� extension reports. �஢���� php-���䨣����.';
$strCardinality = '������⢮ ������⮢';
$strCarriage = '������ ���⪨: \\r';
$strChange = '��������';
$strChangeDisplay = '�롥�� ���� ��� �⮡ࠦ����';
$strChangePassword = '�������� ��஫�';
$strCharsetOfFile = '����஢�� 䠩��:';
$strCheckAll = '�⬥��� ��';
$strCheckDbPriv = '�஢���� �ਢ������ ��';
$strCheckTable = '�஢���� ⠡����';
$strChoosePage = '�롥�� ��࠭��� ��� ।���஢����';
$strColComFeat = '�������� ��������� �⮫�殢';
$strColumn = '�������';
$strColumnNames = '�������� �������';
$strCommand = '�������';
$strComments = '�������ਨ';
$strCompleteInserts = '������ ��⠢��';
$strCompression = '���⨥';
$strConfigFileError = 'phpMyAdmin �� ����� ������ ����� �� ���䨣��樮����� 䠩��!  <br />��������� ��稭� - ᨭ⠪��᪠� �訡��.<br />�맮��� ��� 䠩� (config.inc.php) �����।�⢥��� �� ��㧥�. �᫨ ���� ᮮ�饭�� �� �訡��� - ��ࠢ�� ��. �᫨ ����� ��࠭�� - �� � ���浪�';
$strConfigureTableCoord = '������� ���न���� ⠡���� %s';
$strConfirm = '�� ����⢨⥫쭮 ��� ᤥ���� ��?';
$strConnections = '����������';
$strCookiesRequired = 'Cookies ������ ���� ����祭� ��᫥ �⮣� ����.';
$strCopyTable = '�����஢��� ⠡���� � (���� ������<b>.</b>⠡���):';
$strCopyTableOK = '������ %s �뫠 ᪮��஢��� � %s.';
$strCouldNotKill = 'phpMyAdmin �� ᬮ� 㤠���� thread %s. ��������, �� 㦥 ������.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ���� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ⠡���� � �� %s';
$strCreatePage = '������� ����� ��࠭���';
$strCreatePdfFeat = '�������� PDF-�奬�';
$strCriteria = '���਩';

$strData = '�����';
$strDataDict = '������� ������';
$strDataOnly = '���쪮 �����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ������ %s �뫠 㤠����.';
$strDatabaseWildcard = '���� ������ (�������� �ᯮ�짮����� 蠡�����):';
$strDatabases = '���� ������';
$strDatabasesStats = '����⨪� ��� ������';
$strDefault = '�� 㬮�砭��';
$strDelete = '�������';
$strDeleteFailed = '��㤠筮� 㤠�����!';
$strDeleteUserMessage = '�� 㤠��� ���짮��⥫� %s.';
$strDeleted = '�� �� 㤠���';
$strDeletedRows = '������騥 ��� �뫨 㤠����:';
$strDescending = '�� �뢠���';
$strDisabled = '������㯭�';
$strDisplay = '��������';
$strDisplayFeat = '�������� �������⥫�� ����������';
$strDisplayOrder = '���冷� ��ᬮ��:';
$strDisplayPDF = '�������� PDF-�奬�';
$strDoAQuery = '�믮����� "����� �� �ਬ���" (ᨬ��� ����⠭����: "%")';
$strDoYouReally = '�� ����⢨⥫쭮 ������ ';
$strDocu = '���㬥����';
$strDrop = '����⮦���';
$strDropDB = '����⮦��� �� %s';
$strDropTable = '������� ⠡����';
$strDumpXRows = '���� %s ����ᥩ, ��稭�� � %s.';
$strDumpingData = '���� ������ ⠡����';
$strDynamic = '�������᪨�';

$strEdit = '�ࠢ��';
$strEditPDFPages = '�������� PDF-��࠭���';
$strEditPrivileges = '������஢���� �ਢ������';
$strEffective = '��䥪⨢�����';
$strEmpty = '������';
$strEmptyResultSet = 'MySQL ���㫠 ���⮩ १���� (�.�. ���� �冷�).';
$strEnabled = '����㯭�';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' �ਬ�砭��: �ਢ������ MySQL �������� ��-������᪨ ';
$strError = '�訡��';
$strExplain = '������ SQL';
$strExport = '��ᯮ��';
$strExportToXML = '��ᯮ�� � XML-�ଠ�';
$strExtendedInserts = '����७�� ��⠢��';
$strExtra = '�������⥫쭮';

$strFailedAttempts = '��㤠�� ����⪨';
$strField = '����';
$strFieldHasBeenDropped = '���� %s �뫮 㤠����';
$strFields = '����';
$strFieldsEmpty = ' ���⮩ ���稪 �����! ';
$strFieldsEnclosedBy = '���� �����祭� �';
$strFieldsEscapedBy = '���� ��࠭�������';
$strFieldsTerminatedBy = '���� ࠧ������';
$strFixed = '䨪�஢����';
$strFlushTable = '������ ��� ⠡���� ("FLUSH")';
$strFormEmpty = '�ॡ���� ���祭�� ��� ���!';
$strFormat = '��ଠ�';
$strFullText = '����� ⥪���';
$strFunction = '�㭪��';

$strGenBy = '��������';
$strGenTime = '�६� ᮧ�����';
$strGeneralRelationFeat = '�᭮��� ���������� �痢�';
$strGlobalValue = '������쭮� ���祭��';
$strGo = '��襫';
$strGrants = '�ࠢ�';
$strGzip = '��娢�஢��� � gzip';

$strHasBeenAltered = '�뫠 ��������.';
$strHasBeenCreated = '�뫠 ᮧ����.';
$strHaveToShow = '�� ������ ����� �� ����� ����� ������� ��� �⮡ࠦ����';
$strHome = '� ��砫�';
$strHomepageOfficial = '��樠�쭠� ��࠭�� phpMyAdmin';
$strHomepageSourceforge = '����㧪� phpMyAdmin �� Sourceforge';
$strHost = '����';
$strHostEmpty = '���⮥ ��� ���!';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '�᫨ �� ������ ����㧨�� ⮫쪮 ������� �⮫��� ⠡����, 㪠��� ࠧ������� �����묨 ᯨ᮪ �����.';
$strIgnore = '�����஢���';
$strImportDocSQL = '������ docSQL 䠩���';
$strInUse = '�ᯮ������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s �� 㤠���';
$strIndexName = '��� ������&nbsp;:';
$strIndexType = '��� ������&nbsp;:';
$strIndexes = '�������';
$strInsecureMySQL = '��� ���䨣��樮��� 䠩� ᮤ�ন� ����ன�� (���짮��⥫� root ��� ��஫�), ����� �⭮����� � �ਢ�����஢������ ���짮��⥫� MySQL (�� 㬮�砭��). ��� MySQL �ࢥ� ����饭 � �⨬� ����ன���� �� 㬮�砭��, ������ ��� ��থ���, ���⮬� ��� �����⥫쭮 ४��������� ���࠭��� ��� ���� � ������᭮��.';
$strInsert = '��⠢���';
$strInsertAsNewRow = '��⠢��� ���� ��';
$strInsertNewRow = '��⠢��� ���� ��';
$strInsertTextfiles = '��⠢��� ⥪�⮢� 䠩�� � ⠡����';
$strInsertedRows = '��������� ���:';
$strInstructions = '������樨';
$strInvalidName = '"%s" - ���� ��१�ࢨ஢���� ᫮���, �� �� ����� �ᯮ�짮���� ��� � ����⢥ ����� ���� ������/⠡����/����.';

$strKeepPass = '�� ������ ��஫�';
$strKeyname = '��� ����';
$strKill = '�����';

$strLaTeX = 'LaTeX';
$strLandscape = '�������';
$strLength = '�����';
$strLengthSet = '�����/���祭��*';
$strLimitNumRows = '����ᥩ �� ��࠭���';
$strLineFeed = '������ ����砭�� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '��ப� ࠧ������';
$strLinkNotFound = '���� �� �������';
$strLinksTo = '���� �';
$strLocationTextfile = '�����ᯮ������� ⥪�⮢��� 䠩��';
$strLogPassword = '��஫�:';
$strLogUsername = '���짮��⥫�:';
$strLogin = '�室 � ��⥬�';
$strLogout = '��� �� ��⥬�';

$strMissingBracket = '�ய�饭� ᪮���';
$strModifications = '����䨪�樨 �뫨 ��࠭���';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoreStatusVars = '��㣨� ������ ��६����';
$strMoveTable = '��६����� ⠡���� � (���� ������<b>.</b>⠡���):';
$strMoveTableOK = '������ %s �뫠 ��६�饭� � %s.';
$strMySQLCharset = 'MySQL-����஢��';
$strMySQLReloaded = 'MySQL ��१���㦥��.';
$strMySQLSaid = '�⢥� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ������';
$strMySQLShowStatus = '�������� ���ﭨ� MySQL';
$strMySQLShowVars = '�������� ��⥬�� ��६���� MySQL';

$strName = '���';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� ����������';
$strNoDescription = '��� ���ᠭ��';
$strNoDropDatabases = '������� "������� ��" �⪫�祭�.';
$strNoExplain = '�४���� ���ᠭ�� SQL';
$strNoFrames = '��� ࠡ��� phpMyAdmin �㦥� ��㧥� � �����প�� <b>�३���</b>.';
$strNoIndex = '������ �� ��।����!';
$strNoIndexPartsDefined = '���� ������ �� ��।�����!';
$strNoModification = '��� ���������';
$strNoPassword = '��� ��஫�';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� �ਢ������';
$strNoQuery = '��� SQL-�����!';
$strNoRights = '�� �� ����� �����筮 �ࠢ ��� �⮣�!';
$strNoTablesFound = '� �� �� �����㦥�� ⠡���.';
$strNoUsersFound = '�� ������ ���짮��⥫�.';
$strNoValidateSQL = '�� �஢����� SQL';
$strNone = '���';
$strNotNumber = '�� �� �᫮!';
$strNotOK = '�� ��⮢�';
$strNotSet = '������ <b>%s</b> �� �������';
$strNotValidNumber = ' �������⨬�� ������⢮ �冷�!';
$strNull = '����';
$strNumSearchResultsInTable = '%s �����(��) � ⠡��� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�⮣�:</b> <i>%s</i> �����(��)';
$strNumTables = '������';

$strOK = '��⮢�';
$strOftenQuotation = '���筮 ����窨. "�� �롮��" ����砥�, �� ⮫쪮 ���� char � varchar ���������� � ����窨.';
$strOperations = '����樨';
$strOptimizeTable = '��⨬���஢��� ⠡����';
$strOptionalControls = '�� �롮��. ����஫���� ��� ���� ��� ����� ᯥ樠��� ᨬ����.';
$strOptionally = '�� �롮��';
$strOptions = '��樨';
$strOr = '���';
$strOverhead = '�������� ��室�';

$strPHP40203 = '�� �ᯮ���� ����� PHP 4.2.3, ����� ᮤ�ন� ��쥧�� �訡�� �� ࠡ�� � �����-���⮢묨 ��ப��� (mbstring). ������ PHP bug report 19404. ������ ����� PHP �� ४��������� ��� �ᯮ�짮����� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� ��࠭���:';
$strPartialText = '������ ⥪���';
$strPassword = '��஫�';
$strPasswordEmpty = '���⮩ ��஫�!';
$strPasswordNotSame = '��஫� �� ���������!';
$strPdfDbSchema = '������� ���� "%s" - ��࠭�� %s';
$strPdfInvalidPageNum = '����।������ ����� PDF-��࠭���!';
$strPdfInvalidTblName = '������ "%s" �� �������!';
$strPdfNoTables = '��� ⠡���';
$strPerHour = '� ��';
$strPhp = '������� PHP-���';
$strPmaDocumentation = '���㬥���� �� phpMyAdmin';
$strPmaUriError = '��४⨢� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ��⠭������ � ��襬 ���䨣��樮���� 䠩��!';
$strPortrait = '������';
$strPos1 = '��砫�';
$strPrevious = '�����';
$strPrimary = '��ࢨ��';
$strPrimaryKey = '��ࢨ�� ����';
$strPrimaryKeyHasBeenDropped = '��ࢨ�� ���� �� 㤠���';
$strPrimaryKeyName = '��� ��ࢨ筮�� ���� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� �ਧ����� <b>⮫쪮</b> ��ࢨ筮�� ����!)';
$strPrint = '�����';
$strPrintView = '����� ��� ����';
$strPrivileges = '�ਢ������';
$strProcesslist = '���᮪ ����ᮢ';
$strProperties = '�����⢠';
$strPutColNames = '������ ������������ ����� � ��ࢮ� ��ப�';

$strQBE = '�����&nbsp;��&nbsp;�ਬ���';
$strQBEDel = '�������';
$strQBEIns = '��⠢���';
$strQueryOnDb = 'SQL-����� �� <b>%s</b>:';
$strQueryStatistics = '<b>����⨪� ����ᮢ</b>: �� �६��� ����᪠ %s ����ᮢ �뫮 ��᫠�� �� �ࢥ�.';
$strQueryType = '��� �����';

$strReType = '���⢥ত����';
$strReceived = '�ਭ��';
$strRecords = '�����';
$strReferentialIntegrity = '�஢���� 楫��⭮��� ������:';
$strRelationNotWorking = '�������⥫�� ���������� ��� ࠡ��� � �易��묨 ⠡��栬� ������㯭�. ��� ��।������ ��稭� ������ %s�%s.';
$strRelationView = '��易��� ���';
$strRelationalSchema = '����樮���� �奬�';
$strReloadFailed = '�� 㤠���� ��१���㧨�� MySQL.';
$strReloadMySQL = '��१���㧨�� MySQL';
$strRememberReload = '�� ������ ��१���㧨�� �ࢥ�.';
$strRenameTable = '��२�������� ⠡���� �';
$strRenameTableOK = '������ %s �뫠 ��२�������� � %s';
$strRepairTable = '��稭��� ⠡����';
$strReplace = '��������';
$strReplaceTable = '�������� ����� ⠡���� ����묨 �� 䠩��';
$strReset = '�����⠭�����';
$strRevoke = '�⬥����';
$strRevokeGrant = '�⬥���� �।��⠢����� �ࠢ';
$strRevokeGrantMessage = '�뫮 �⬥���� �।��⠢����� �ࠢ ��� %s';
$strRevokeMessage = '�� �������� �ਢ������ ��� %s';
$strRevokePriv = '�⬥���� �ਢ������';
$strRowLength = '����� �鸞';
$strRowSize = ' ������ �鸞 ';
$strRows = '���';
$strRowsFrom = '�冷� ��';
$strRowsModeHorizontal = '��ਧ��⠫쭮�';
$strRowsModeOptions = '� %s ०���, ��������� ��᫥ ������ %s �祥�';
$strRowsModeVertical = '���⨪��쭮�';
$strRowsStatistic = '����⨪� �鸞';
$strRunQuery = '�믮����� �����';
$strRunSQLQuery = '�믮����� SQL �����(�) �� �� %�';
$strRunning = '�� %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = '�������� � ��� �訡�� � SQL-�����. ��������, �஢���� �����⥫쭮 ��� ����� � ᮮ⢥��⢨� ����祪. �������� ⠪��, �� �� ��⠥��� ������� ������ 䠩� ��� ���� quoted text area. �� ����� ���஡����� �믮����� ᢮� ����� �१ ����䥩� ��������� ��ப� MySQL. ���ᠭ�� �訡�� MySQL �ࢥ� ���� ����, �������� ��� ������� ������, �� �� �ந��諮. �᫨ � ��� �� ࠢ�� ��������� �஡���� ��� �᫨ ����� �뤠�� �訡�� ⠬, ��� ����䥩� ��������� ��ப� ࠡ�⠥� �ᯥ譮, ���஡�� �������� ᢮� SQL ����� �� ������ ����ᮢ � ��।�����, ����� ������ ��뢠�� �஡����. �� ����� ⠪�� ��᫠�� ���� �� �訡�� ����� � ������ ������ (ᥪ�� CUT):';
$strSQLParserUserError = '������� �������� �訡�� � ��襬 SQL �����. ���ᠭ�� �訡�� �� MySQL �ࢥ� ���� ����, ��������, ��� ������� ��� ࠧ�������';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL-१����';
$strSQPBugInvalidIdentifer = '���ࠢ���� �����䨪���';
$strSQPBugUnclosedQuote = '��������� ����窠';
$strSQPBugUnknownPunctuation = '�������⭠� ��ப� � �㭪��樥�';
$strSave = '���࠭���';
$strScaleFactorSmall = '����⠡ ᫨誮� �����쪨� ��� �⮡ࠦ���� �ᥩ ⠡���� �� ����� ��࠭��';
$strSearch = '�᪠��';
$strSearchFormTitle = '�᪠�� � ���� ������';
$strSearchInTables = '� ⠡���(��):';
$strSearchNeedle = '�����(�) ��� ���祭��(�) ��� ���᪠ (������ "%") �:';
$strSearchOption1 = '��� ���� ᫮��';
$strSearchOption2 = '�� ᫮��';
$strSearchOption3 = '�筮� ᮮ⢥��⢨�';
$strSearchOption4 = 'ॣ��୮� ��ࠦ����';
$strSearchResultsFor = '�᪠�� � "<i>%s</i>" %s:';
$strSearchType = '�᪠��:';
$strSelect = '�����';
$strSelectADb = '�롥�� ��';
$strSelectAll = '�⬥��� ��';
$strSelectFields = '����� ���� (������ ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '�롥�� ⠡����(�)';
$strSend = '��᫠��';
$strSent = '��᫠��';
$strServer = '��ࢥ� %s';
$strServerChoice = '�롮� �ࢥ�';
$strServerStatus = '������ ���ଠ��';
$strServerStatusUptime = '��� MySQL �ࢥ� ࠡ�⠥� %s. �� �� ����饭 %s.';
$strServerTabProcesslist = '������';
$strServerTabVariables = '��६����';
$strServerTrafficNotes = '<b>��䨪</b>: �� ⠡���� �����뢠�� ����⨪� �� �⥢��� ��䨪� MySQL �ࢥ� � �६��� ��� ����᪠.';
$strServerVars = '��६���� � ����ன�� �ࢥ�';
$strServerVersion = '����� �ࢥ�';
$strSessionValue = '���祭�� ��ᨨ';
$strSetEnumVal = '��� ⨯�� ���� "enum" � "set", ������ ���祭�� �� �⮬� �ଠ��: \'a\',\'b\',\'c\'...<br />�᫨ ��� ������������ ����� ������ ����� ���� ("\"") ��� �������� ������ ("\'") �।� ��� ���祭��, ���⠢�� ��। ���� ������ ����� ���� (���ਬ��, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ��';
$strShowColor = '�������� 梥�';
$strShowCols = '�������� �������';
$strShowDatadictAs = '��ଠ� ᫮���� ������';
$strShowGrid = '�������� ���';
$strShowPHPInfo = '�������� ���ଠ�� � PHP';
$strShowTableDimension = '�������� ࠧ��୮��� ⠡����';
$strShowTables = '�������� ⠡����';
$strShowThisQuery = ' �������� ����� ����� ᭮�� ';
$strShowingRecords = '�����뢠�� ����� ';
$strSingly = '(�⤥�쭮)';
$strSize = '������';
$strSort = '�����஢���';
$strSpaceUsage = '�ᯮ��㥬�� ����࠭�⢮';
$strSplitWordsWithSpace = '�����, ࠧ������� �஡���� (" ").';
$strStatement = '��ࠦ����';
$strStatus = '�����';
$strStrucCSV = 'CSV �����';
$strStrucData = '������� � �����';
$strStrucDrop = '�������� 㤠����� ⠡����';
$strStrucExcelCSV = 'CSV ��� ������ Ms Excel';
$strStrucOnly = '���쪮 ��������';
$strStructPropose = '�।�������� ������� ⠡����';
$strStructure = '�������';
$strSubmit = '�믮�����';
$strSuccess = '��� SQL-����� �� �ᯥ譮 �믮����';
$strSum = '�ᥣ�';

$strTable = '⠡��� ';
$strTableComments = '�������਩ � ⠡���';
$strTableEmpty = '���⮥ �������� ⠡����!';
$strTableHasBeenDropped = '������ %s �뫠 㤠����';
$strTableHasBeenEmptied = '������ %s �뫠 ��饭�';
$strTableHasBeenFlushed = '�� ��襭 ��� ⠡���� %s';
$strTableMaintenance = '���㦨����� ⠡����';
$strTableOfContents = '����������';
$strTableStructure = '������� ⠡����';
$strTableType = '��� ⠡����';
$strTables = '%s ⠡���(�)';
$strTextAreaLength = ' ��-�� ����让 �����,<br /> �� ���� �� ����� ���� ��।���஢���� ';
$strTheContent = '����ন��� 䠩�� �뫮 ������஢���.';
$strTheContents = '����ন��� 䠩�� ����頥� ᮤ�ন��� ⠡���� ��� �冷� � ������묨 ��ࢨ�묨 ��� 㭨����묨 ���砬�.';
$strTheTerminator = '������ ����砭�� �����.';
$strThreadSuccessfullyKilled = 'Thread %s �� 㤠���.';
$strTime = '�६�';
$strTotal = '�ᥣ�';
$strTotalUC = '�ᥣ�';
$strTraffic = '��䨪';
$strType = '���';

$strUncheckAll = '����� �⬥�� � ���';
$strUnique = '������쭮�';
$strUnselectAll = '����� �⬥�� � ���';
$strUpdatePrivMessage = '�뫨 �������� �ਢ������ ���';
$strUpdateProfile = '�������� ��䨫�:';
$strUpdateProfileMessage = '��䨫� �� ��������.';
$strUpdateQuery = '��������� �����';
$strUsage = '�ᯮ�짮�����';
$strUseBackquotes = '����� ����窨 � ��������� ⠡��� � �����';
$strUseTables = '�ᯮ�짮���� ⠡����';
$strUser = '���짮��⥫�';
$strUserEmpty = '���⮥ ��� ���짮��⥫�!';
$strUserName = '��� ���짮��⥫�';
$strUsers = '���짮��⥫�';

$strValidateSQL = '�஢���� SQL';
$strValidatorError = '�஢�ઠ SQL �� ����� ���� ���樠����஢���. �஢����, ��⠭������ �� ����室��� ���㫨 ���७�� ��� PHP, ���ᠭ�� � %s���㬥��樨%s.';
$strValue = '���祭��';
$strVar = '��६�����';
$strViewDump = '��ᬮ���� ���� ⠡����';
$strViewDumpDB = '��ᬮ���� ���� ��';

$strWebServerUploadDirectory = '��४���, �㤠 ��������� ����砭�� 䠩�� �� web-�ࢥ�';
$strWebServerUploadDirectoryError = '��४���, ������ �� ��⠭����� ��� "upload" �� ����� ���� �����';
$strWelcome = '���� ���������� � %s';
$strWithChecked = '� �⬥祭�묨:';
$strWrongUser = '�訡��� �����/��஫�. � ����㯥 �⪠����.';

$strYes = '��';

$strZip = '��娢�஢��� � zip';

// To translate
$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate
$strOriginalInterface = 'original interface';  //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
?>
