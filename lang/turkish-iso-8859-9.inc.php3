<?php
/* $Id$ */

//�eviride eksik veya hatal� oldu�unu d���nd���n�z k�s�mlar� bora@ktu.edu.tr adresine g�nderebilirsiniz...
//bora alio�lu 02.08.2002...tempus fugit...

$charset = 'iso-8859-9';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
//veritabanlar� terminolojisinde terc�meye pek m�sait olmayan index ve unique s�zc�kleri aynen kullan�ld�: uniqe=e�siz,tek
$day_of_week = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
$month = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = '%s �zerinde birincil index eklendi';
$strAccessDenied = 'Eri�im engellendi';
$strAction = 'Eylem';
$strAddDeleteColumn = 'S�tun alan� Ekle/Sil';
$strAddDeleteRow = 'Kriter sat�r� Ekle/Sil';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni ayr�cal�k ekle';
$strAddPrivMessage = 'Yeni ayr�cal�k eklediniz..';
$strAddSearchConditions = 'Arama durumu ekle ("where" c�mleci�i i�in):';
$strAddToIndex = '%s s�tununu(s�tunlar&#305;na) index ekle';
$strAddUser = 'Yeni kullan�c� ekle';
$strAddUserMessage = 'Yeni bir kullan�c� eklediniz.';
$strAffectedRows = 'Etkilenen sat�rlar:';
$strAfter = 'Sonuna %s';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Yeni kayit ekle';
$strAll = 'T�m�';
$strAllTableSameWidth = 'B�t�n tablolar� ayn� geni�likte g�ster';
$strAlterOrderBy = 'Tabloyu de�i�tir ve �una g�re s�rala:';
$strAnIndex = '%s �zerinde yeni bir index eklendi';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi s�tun';
$strAnyDatabase = 'Herhangi veritaban�';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullan�c�';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablonun ba��nda';
$strAtEndOfTable = 'Tablonun sonunda';
$strAttr = '�zellikler';

$strBack = 'Geri';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - d�zenlemeyiniz';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = ' SQL-sorgusu';
$strBookmarkThis = 'Bu SQL-sorgusunu i�aretle';
$strBookmarkView = 'Sadece g�zat';
$strBrowse = 'Tara';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'mySQL uzant�s�n� y�kleyemiyor,<br />l�tfen PHP ayarlar�n� kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti d�n���m� i�in gerekli olan Iconv veya recode uzant�lar�n� y�kleyenemiyor.  Php\'nin bu uzant�lara izin vermesini sa�lay�n veya phpMyAdmin i�inde karakter d�n���m�n� devre d��� b�rak�n�z...';
$strCantRenameIdxToPrimary = 'Index\'i PRIMARY olarak adland&#305;r&#305;mazs&#305;n&#305;z!';
$strCantUseRecodeIconv = 'Uzant� raporlar� y�klenmi�ken , ne iconv ne libinconv ne de recode_string fonksiyonu  kullan�lamaz.  Php ayarlar�n�z� kontrol ediniz.';
$strCardinality = 'En �nemli';
$strCarriage = 'Enter Karakteri: \\r';
$strChange = 'De�i�tir';
$strChangeDisplay = 'G�rmek istedi�iniz alan� se�iniz';
$strChangePassword = '�ifre De�i�tir';
$strCharsetOfFile = 'Dosyan�n karakter seti:';
$strCheckAll = 'T�m�n� se�';
$strCheckDbPriv = 'Veritaban� �nceliklerini kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'L�tfen d�zenlemek istedi�iniz sayfay� se�in';
$strColComFeat = 'S�tun yorumlar� g�steriliyor';
$strColumn = 'S�tun';
$strColumnNames = 'S�tun adlar�';
$strComments = 'Yorumlar';
$strCompleteInserts = 'Tamamlanm�� eklemeler';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyan�z� okuyamad�....<br /> Bu php yorumlama hatas� buldu�u zaman veya dosyay� bulamad��� zaman meydana gelebilir..<br /> L�tfen a�a��daki linki kullanarak dosyay� direkt olarak �a��r�n ve ald���n�z php hata mesajlar�n� okuyunuz.�o�u durumda herhangi bir yerde t�rnak veya noktal� virg�l eksiktir<br /> Bo� bir sayfayla kar��la��rsan�z ,her�ey yolunda demektir.';
$strConfigureTableCoord = ' L�tfen %s tablosu i�in koordinatlar� yap�land�r�n�z';
$strConfirm = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz?';
$strCookiesRequired = 'Cookieler a�&#305;k olmal&#305;d&#305;r.';
$strCopyTable = 'Tabloyu (veritaban�<b>.</b>tablo) kopyala:';
$strCopyTableOK = '%s tablosu %s �zerine kopyaland�.';
$strCreate = 'Git';
$strCreateIndex = '%s s�tununda yeni bir index olu&#351;tur';
$strCreateIndexTopic = 'Yeni bir index olu&#351;tur';
$strCreateNewDatabase = 'Yeni veritaban� olu�tur';
$strCreateNewTable = '%s veritaban� �zerinde yeni bir tablo olu�tur';
$strCreatePage = 'Yeni sayfa olu�tur';
$strCreatePdfFeat = 'PDF\'lerin olu�turulmas�';
$strCriteria = 'Kriter';

$strData = 'Veri';
$strDataOnly = 'Sadece veri';
$strDatabase = 'Veritaban� ';
$strDatabaseHasBeenDropped = '%s veritaban� kald�r�ld�.';
$strDatabaseWildcard = 'Veritaban� (* izin verili):';
$strDatabases = 'veritabanlar�';
$strDatabasesStats = 'Veritaban� istatistikleri';
$strDefault = 'Varsay�lan';
$strDelete = 'Sil';
$strDeleteFailed = 'Silme s�ras�nda hata olu�tu!';
$strDeleteUserMessage = '%s kullan�c�s�n� sildiniz.';
$strDeleted = 'Sat�r silindi.';
$strDeletedRows = 'Silinen sat�rlar:';
$strDescending = 'Azalan';
$strDisabled = 'Etkin de�il';
$strDisplay = 'G�r�nt�le';
$strDisplayFeat = '�zellikleri G�ster';
$strDisplayOrder = 'G�r�n�m d�zeni:';
$strDisplayPDF = 'PDF �emas�n� g�ster';
$strDoAQuery = '"�rnekle sorgu" yap (joker: "%")';
$strDoYouReally = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz? ';
$strDocu = 'Yard�m';
$strDrop = 'Kald�r';
$strDropDB = 'Veritaban�\'n� kald�r %s';
$strDropTable = 'Tablo\'yu kald�r';
$strDumpXRows = ' %s sat�rdan ba�layarak  %s a kadar ��kt� �ret.';
$strDumpingData = 'Tablo d�k�m verisi';
$strDynamic = 'dinamik';

$strEdit = 'D�zenle';
$strEditPDFPages = ' PDF Sayfalar�n� d�zenle';
$strEditPrivileges = '�ncelikleri D�zenle';
$strEffective = 'Efektif';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� bir sonuc k�mesi d�nd�rd� ( s�f�r sat�r).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEnglishPrivileges = ' Not: mySQL  �ncelik adlar� �ngilizce olarak belirtilmi�tir ';
$strError = 'Hata';
$strExplain = 'SQL\'i a��kla';
$strExport = 'D�n��t�r';
$strExportToXML = 'XML format�na d�n��t�r';
$strExtendedInserts = 'Geni�letilmi� eklemeler';
$strExtra = 'Ayr�ca';

$strField = 'Alan';
$strFieldHasBeenDropped = '%s alan� kald�r�lm��t�r';
$strFields = 'Alanlar';
$strFieldsEmpty = ' Alan say�s� bo�! ';
$strFieldsEnclosedBy = 'Alan ay�r�c� i�aret';//it does not seem well but just works
$strFieldsEscapedBy = 'Ka��� simgesi(�zel i�aretler i�in)';//it does not seem well but just works
$strFieldsTerminatedBy = 'Alan bitirici i�aret';//it does not stand seem but just works
$strFixed = 'sabit';
$strFlushTable = 'Tabloyu kapat("FLUSH")';
$strFormEmpty = 'Form\'da eksik de�er !';
$strFormat = 'Bi�im';
$strFullText = 'T�m metinler';
$strFunction = 'Fonksiyon';

$strGenBy = 'Olu�turuldu->:';
$strGenTime = '��kt� Tarihi';
$strGeneralRelationFeat = 'Genel ili�ki �zellikleri';
$strGo = 'Git';
$strGrants = 'Haklar';
$strGzip = '"gziplenmi�"';

$strHasBeenAltered = 'd�zenlendi.';
$strHasBeenCreated = 'yarat�ld�.';
$strHaveToShow = 'G�r�nt�lemek i�in en az bir s�tun se�melisiniz';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfas�';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Y�kleme Sayfas�';
$strHost = 'Sunucu:';
$strHostEmpty = 'Sunucu ismi alan� doldurulmad�!';

$strIdxFulltext = 'T�m metinler';
$strIfYouWish = 'E�er bir tablo\'nun sadece baz� s�tunlar�n� y�klemek istiyorsan�z,virg�llerle ayr�lm�� bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strInUse = 'kullan�mda';
$strIndex = 'Index';
$strIndexHasBeenDropped = '%s index\'i silindi.';
$strIndexName = 'Index ismi :';
$strIndexType = 'Index tipi :';
$strIndexes = 'Index\'ler';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir sat�r olarak ekle';
$strInsertNewRow = 'Yeni sat�r ekle';
$strInsertTextfiles = 'Tablo i�ine metin dosyas� ekle';
$strInsertedRows = 'Eklenen sat�rlar:';
$strInstructions = 'Talimatlar';
$strInvalidName = '"%s" s�zc��� kullan�lamayan s�zc�k.Veritaban�/tablo/alan ismi olarak kullanamass�n�z, you can\'t use it as a database/table/field name.';

$strKeepPass = '�ifreyi de�i�tirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';

$strLength = 'Boyut';
$strLengthSet = 'Boyut/De�erler*';
$strLimitNumRows = 'Sayfa ba&#351;&#305;na kay&#305;t say&#305;s&#305;';
$strLineFeed = 'Sat�r: \\n';
$strLines = 'Sat�rlar';
$strLinesTerminatedBy = 'Sat�r sonu';
$strLinkNotFound = 'Link bulunamad�';
$strLinksTo = 'Linkler->';
$strLocationTextfile = 'Dosyadan y�kle';
$strLogPassword = '&#350;ifre:';
$strLogUsername = 'Kullan&#305;c&#305; Ad&#305;:';
$strLogin = 'Login';
$strLogout = '��k��';

$strMissingBracket = 'Parantez eksik';
$strModifications = 'De�i�iklikler kaydedildi';
$strModify = 'De�i�tir';
$strModifyIndexTopic = 'Index d�zenle';
$strMoveTable = 'Tabloyu (veritaban�<b>.</b>tablo) ta��:';
$strMoveTableOK = '%s tablosu %s �zerine ta��nd�.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden y�klendi.';
$strMySQLSaid = 'MySQL ��kt�s�: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  �zerinde  %pma_s3% olarak �al���yor';
$strMySQLShowProcess = '��lemleri g�ster';
$strMySQLShowStatus = 'MySQL �al��ma zaman� bilgisini g�ster';
$strMySQLShowVars = 'MySQL sistem de�i�kenlerini g�ster';

$strName = '�sim';
$strNext = 'Sonraki';
$strNo = 'Hay�r';
$strNoDatabases = 'Veritaban� yok';
$strNoDescription = 'Tan�mlama yok';
$strNoDropDatabases = '"DROP DATABASE" c�mlesi burada kullan�lamaz.';
$strNoExplain = 'SQL a��klamas�n� yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir taray&#305;c&#305; ile daha iyi �al&#305;&#351;maktad&#305;r...';
$strNoIndex = 'Index tan&#305;mlanmad&#305;!';
$strNoIndexPartsDefined = 'Index k&#305;sm&#305; tan&#305;mlanmad&#305;!';
$strNoModification = 'De�i�iklik yok';
$strNoPassword = '�ifre yok';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = 'Ayr�cal�k yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak i�in yeterli haklara sahip de�ilsiniz!';
$strNoTablesFound = 'Veritaban�\'nda tablo bulunamad�.';
$strNoUsersFound = 'Kullan�c�(lar) bulunamad�.';
$strNoValidateSQL = 'SQL do�rulamas�n� yapma';
$strNone = 'Hi�biri';
$strNotNumber = 'Bu bir say� de�il!';
$strNotOK = 'Tamam de�il';
$strNotSet = '<b>%s</b> tablosu bulunamad� veya %s i�inde tan�mlanmad�';
$strNotValidNumber = ' ge�erli bir sat�r say�s� de�il!';
$strNull = 'Bo�';
$strNumSearchResultsInTable = '%s e�le�im : %s tablosu i�inde';
$strNumSearchResultsTotal = 'Toplam: %s e�le�im';

$strOK = 'Tamam';
$strOftenQuotation = 'S�k kullan�lan aktarma i�aretleri.SE��ME BA�LI,sadece char ve varchar alanlar�n�n "enclosed-by" karakteri ile �evrenelece�i anlam�na gelir..';
$strOperations = '��lemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = '�zel karakterleri yazmak ve okumak i�in kontroller.Opsiyonel';
$strOptionally = 'Se�ime Ba�l�';
$strOptions = 'Se�enekler';
$strOr = 'veya';
$strOverhead = 'Kullan&#305;lamayan Veri';

$strPHPVersion = 'PHP S�r�m�';
$strPageNumber = 'Sayfa numaras�:';
$strPartialText = 'B�l�msel Metinler';
$strPassword = '�ifre';
$strPasswordEmpty = '�ifre alan� doldurulmad�!';
$strPasswordNotSame = 'Girilen �ifreler ayn� de�il!';
$strPdfDbSchema = ' "%s" veritaban�n�n �emas� - Sayfa %s';
$strPdfInvalidPageNum = 'Tan�mlanmam�� PDF sayfa numaras�!';
$strPdfInvalidTblName = ' "%s" tablosu bulunam�yor !';
$strPhp = 'PHP kodu olu�tur';
$strPmaDocumentation = 'phpMyAdmin yard�m';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin de�eri  konfigurasyon dosyas�n�n i�inde verilmelidir!';
$strPos1 = 'Ba�lang��';
$strPrevious = '�nceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal&#305;d&#305;r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece</b> bir anahtar&#305;n ismi <b>olmal&#305;d&#305;r!</b>)';
$strPrintView = 'Yaz�c� g�r�nt�s�';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = '�ncelikler';
$strProperties = '�zellikler';

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Veritaban� �zerinde SQL-sorgusu&nbsp;<b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';

$strReType = 'Yeniden gir';
$strRecords = 'Kay�tlar';
$strReferentialIntegrity = 'Referans b�t�nl���n� kontrol et.';
$strRelationNotWorking = 'Ba�l� tablolarla �al��mada kullan�lan ekstra �zellikler deaktif edildi...Ni�in oldu�unu ��renmek i�in %sburaya%s t�klay�n�z...';
$strRelationView = '�li�ki g�r�n�m�';
$strReloadFailed = 'MySQL yeniden y�klenmesi ger�ekle�tirilemedi.';
$strReloadMySQL = 'MySQL\'i yeniden y�kle';
$strRememberReload = 'Server\'� yeniden y�klemeyi unutmay�n�z.';
$strRenameTable = 'Tablonun ismini �una de�i�tir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adland�r�ld�';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerde�i�tir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile de�i�tir';
$strReset = 'S�f�rla';
$strRevoke = 'Ge�ersiz k�l';
$strRevokeGrant = 'Hak ge�ersiz k�l';
$strRevokeGrantMessage = '%s i�in Grant �nceli&#287;ini kald&#305;rd&#305;n&#305;z';
$strRevokeMessage = '%s\'in �nceliklerini kald&#305;rd&#305;n&#305;z';
$strRevokePriv = 'Ayr�cal�klar� ge�ersiz k�l';
$strRowLength = 'Sat�r boyu';
$strRowSize = ' Sat�r boyutu ';
$strRows = 'Sat�r Say�s�';
$strRowsFrom = '(kay�t)ba�layaca�� kay�t :';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s modunda ve %s h�cre sonra ba&#351;l&#305;&#287;&#305; tekrarla';
$strRowsModeVertical = 'dikey';
$strRowsStatistic = 'Sat�r istatisti�i';
$strRunQuery = 'Sorguyu �al��t�r';
$strRunSQLQuery = '%s veritaban� �zerinde sorgu/sorgular �al��t�r';
$strRunning = ': %s �zerinde �al���yor...';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-sorgusu';
$strSQLResult = 'SQL sonucu';
$strSave = 'Kaydet';
$strScaleFactorSmall = '�arpan fakt�r� sayfadaki �ema i�in �ok k���k';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritaban�nda ara';
$strSearchInTables = 'Tablo(lar) i�inde:';
$strSearchNeedle = 'Aranacak kelime veya de�erler (joker: "%"):';
$strSearchOption1 = 'kelimelerin en az�ndan biri';
$strSearchOption2 = 'b�t�n kelimeler';
$strSearchOption3 = 'tam e�le�im';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s i�in arama sonu�lar�:';
$strSearchType = 'Bul:';
$strSelect = 'Se�';
$strSelectADb = ' L�tfen bir veritaban&#305; se�iniz';
$strSelectAll = 'T�m�n� se�';
$strSelectFields = 'Alan se� (en az bir):';
$strSelectNumRows = 'sorgu i�erisinde';
$strSelectTables = 'Tablolar� se�';
$strSend = 'Dosya olarak kaydet';
$strServerChoice = 'Server se�imi';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = 'Server s�r�m�';
$strSetEnumVal = 'E�er alan tipi "enum" veya  "set" ise , l�tfen verileri �u formata g�re giriniz: \'a\',\'b\',\'c\'...<br>E�er bu de�erler aras�na backslash ("\") veya tek t�rnak koyman�z gerekirse ("\'"),bunun i�in backslash kullan�n (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'G�ster:';
$strShowAll = 'T�m�n� g�ster';
$strShowColor = 'Rengi g�ster';
$strShowCols = 'B�t�n s�tunlar� g�ster';
$strShowGrid = 'Izgaray� g�ster';
$strShowPHPInfo = 'PHP bilgisini g�ster';
$strShowTableDimension = 'Tablolar�n boyutlar�n� g�ster';
$strShowTables = 'Tablolar� g�ster';
$strShowThisQuery = ' Bu sorguyu burda yine g�ster ';
$strShowingRecords = 'Kay�tlar� g�steriyor';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSort = 'S�rala';
$strSpaceUsage = 'Kullan�lan alan';
$strSplitWordsWithSpace = 'Kelimeler bir bo�luk karakteriyle b�l�nm��t�r (" ").';
$strStatement = '�fadeler';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yap� ve Veri';
$strStrucDrop = '\'Drop table\' ekle';
$strStrucExcelCSV = 'MS Excel verisi i�in CSV';
$strStrucOnly = 'Sadece yap�';
$strStructPropose = 'Tablo yap�s�n� ayarla(mysql,tablo yap�s�n� optimize eder)';
$strStructure = 'Yap�';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz ba�ar�yla �al��t�r�lm��t�r';
$strSum = 'toplam';

$strTable = 'Tablo';
$strTableComments = 'Tablo yorumlar�';
$strTableEmpty = 'Tablo ismi bo�!';
$strTableHasBeenDropped = '%s tablosu kald�r�lm��t�r';
$strTableHasBeenEmptied = '%s tablosu bo�alt�lm��t�r';
$strTableHasBeenFlushed = '%s tablosu ba&#351;ar&#305;yla kapat&#305;lm&#305;&#351;t&#305;r.';
$strTableMaintenance = 'Tablo bak�m�';
$strTableStructure = 'Tablo i�in tablo yap�s�';
$strTableType = 'Tablo tipi';
$strTables = '%s tablo';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan d�zenlenmeyebilir ';
$strTheContent = 'Dosyan�z�n i�eri�i eklendi.';
$strTheContents = 'Dosyan�n i�eri�i tablonun i�eri�ini ayn� birincil veya unique anahtar de�erli s�tunlar i�in yer de�i�tirir..';
$strTheTerminator = 'Alan bitimini belirten i�aret.';
$strTotal = 'toplam';
$strType = 'Tip';

$strUncheckAll = 'Hi�birisini Se�me';
$strUnique = 'Unique';
$strUnselectAll = 'Hi�birisini se�me';
$strUpdatePrivMessage = '%s i�in olan ayr�cal�klar� g�ncellediniz.';
$strUpdateProfile = 'Profil g�ncelle:';
$strUpdateProfileMessage = 'Profil g�ncellendi.';
$strUpdateQuery = 'Sorguyu g�ncelle';
$strUsage = 'Kullan�m';
$strUseBackquotes = 'Tablo ve alan isimleri i�in ters t�rnak " ` " i�aretini kullan';
$strUseTables = 'Tablolar� kullan';
$strUser = 'Kullan�c�:';
$strUserEmpty = 'Kullan�c� ismi alan� doldurulmad�!';
$strUserName = 'Kullan�c� ismi';
$strUsers = 'Kullan�c�lar';

$strValidateSQL = 'SQL\'i do�rula';
$strValue = 'De�er';
$strViewDump = 'Tablo\'nun d�k�m(�ema)\'�n� g�ster';
$strViewDumpDB = 'Veritaban�\'n�n d�k�m(�ema)\'�n� g�ster';

$strWelcome = '%s \'e HO�GELD�N�Z....';
$strWithChecked = 'se�ilileri:';
$strWrongUser = 'Hatal� kullan�c�/parola. Eri�im engellendi.';

$strYes = 'Evet';

$strZip = '"ziplenmi�"';
// To translate
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strAdministration = 'Administration'; //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate

$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strCommand = 'Command'; //to translate
$strCompression = 'Compression'; //to translate
$strConnections = 'Connections'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate

$strDataDict = 'Data Dictionary';  //to translate
$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate

$strFailedAttempts = 'Failed attempts'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGrantOption = 'Grant'; //to translate

$strId = 'ID'; //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLaTeX = 'LaTeX';  //to translate
$strLandscape = 'Landscape';  //to translate

$strMoreStatusVars = 'More status variables'; //to translate

$strNumTables = 'Tables'; //to translate


$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
$strPdfNoTables = 'No tables';  //to translate
$strPerHour = 'per hour'; //to translate
$strPortrait = 'Portrait';  //to translate
$strPrint = 'Print';  //to translate
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
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strProcesslist = 'Process list'; //to translate
$strPutColNames = 'Put fields names at first row';  //to translate

$strQueryType = 'Query type'; //to translate

$strReceived = 'Received'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strSent = 'Sent'; //to translate
$strServer = 'Server %s';  //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strStatus = 'Status'; //to translate

$strTableOfContents = 'Table of contents';  //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate
$strTime = 'Time'; //to translate
$strTotalUC = 'Total'; //to translate
$strTraffic = 'Traffic'; //to translate

$strUserOverview = 'User overview'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strVar = 'Variable'; //to translate

$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate

$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

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
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
?>
