<?php
/* $Id$ */

//çeviride eksik veya hatalı olduğunu düşündüğünüz kısımları bora@ktu.edu.tr adresine gönderebilirsiniz...
//bora alioğlu 02.08.2002...tempus fugit...

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
//veritabanları terminolojisinde tercümeye pek müsait olmayan index ve unique sözcükleri aynen kullanıldı: uniqe=eşsiz,tek
$day_of_week = array('Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi');
$month = array('Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = '%s üzerinde birincil index eklendi';
$strAccessDenied = 'Erişim engellendi';
$strAction = 'Eylem';
$strAddDeleteColumn = 'Sütun alanı Ekle/Sil';
$strAddDeleteRow = 'Kriter satırı Ekle/Sil';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni ayrıcalık ekle';
$strAddPrivMessage = 'Yeni ayrıcalık eklediniz..';
$strAddSearchConditions = 'Arama durumu ekle ("where" cümleciği için):';
$strAddToIndex = '%s sütununu(sütunlar&#305;na) index ekle';
$strAddUser = 'Yeni kullanıcı ekle';
$strAddUserMessage = 'Yeni bir kullanıcı eklediniz.';
$strAffectedRows = 'Etkilenen satırlar:';
$strAfter = 'Sonuna %s';
$strAfterInsertBack = 'Return';
$strAfterInsertNewInsert = 'Yeni kayit ekle';
$strAll = 'Tümü';
$strAllTableSameWidth = 'Bütün tabloları aynı genişlikte göster';
$strAlterOrderBy = 'Tabloyu değiştir ve şuna göre sırala:';
$strAnIndex = '%s üzerinde yeni bir index eklendi';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi sütun';
$strAnyDatabase = 'Herhangi veritabanı';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullanıcı';
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablonun başında';
$strAtEndOfTable = 'Tablonun sonunda';
$strAttr = 'Özellikler';

$strBack = 'Geri';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - düzenlemeyiniz';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkQuery = ' SQL-sorgusu';
$strBookmarkThis = 'Bu SQL-sorgusunu işaretle';
$strBookmarkView = 'Sadece gözat';
$strBrowse = 'Tara';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'mySQL uzantısını yükleyemiyor,<br />lütfen PHP ayarlarını kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti dönüşümü için gerekli olan Iconv veya recode uzantılarını yükleyenemiyor.  Php\'nin bu uzantılara izin vermesini sağlayın veya phpMyAdmin içinde karakter dönüşümünü devre dışı bırakınız...';
$strCantRenameIdxToPrimary = 'Index\'i PRIMARY olarak adland&#305;r&#305;mazs&#305;n&#305;z!';
$strCantUseRecodeIconv = 'Uzantı raporları yüklenmişken , ne iconv ne libinconv ne de recode_string fonksiyonu  kullanılamaz.  Php ayarlarınızı kontrol ediniz.';
$strCardinality = 'En önemli';
$strCarriage = 'Enter Karakteri: \\r';
$strChange = 'Değiştir';
$strChangeDisplay = 'Görmek istediğiniz alanı seçiniz';
$strChangePassword = 'Şifre Değiştir';
$strCharsetOfFile = 'Dosyanın karakter seti:';
$strCheckAll = 'Tümünü seç';
$strCheckDbPriv = 'Veritabanı önceliklerini kontrol et';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'Lütfen düzenlemek istediğiniz sayfayı seçin';
$strColComFeat = 'Sütun yorumları gösteriliyor';
$strColumn = 'Sütun';
$strColumnNames = 'Sütun adları';
$strComments = 'Yorumlar';
$strCompleteInserts = 'Tamamlanmış eklemeler';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyanızı okuyamadı....<br /> Bu php yorumlama hatası bulduğu zaman veya dosyayı bulamadığı zaman meydana gelebilir..<br /> Lütfen aşağıdaki linki kullanarak dosyayı direkt olarak çağırın ve aldığınız php hata mesajlarını okuyunuz.Çoğu durumda herhangi bir yerde tırnak veya noktalı virgül eksiktir<br /> Boş bir sayfayla karşılaşırsanız ,herşey yolunda demektir.';
$strConfigureTableCoord = ' Lütfen %s tablosu için koordinatları yapılandırınız';
$strConfirm = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz?';
$strCookiesRequired = 'Cookieler aç&#305;k olmal&#305;d&#305;r.';
$strCopyTable = 'Tabloyu (veritabanı<b>.</b>tablo) kopyala:';
$strCopyTableOK = '%s tablosu %s üzerine kopyalandı.';
$strCreate = 'Git';
$strCreateIndex = '%s sütununda yeni bir index olu&#351;tur';
$strCreateIndexTopic = 'Yeni bir index olu&#351;tur';
$strCreateNewDatabase = 'Yeni veritabanı oluştur';
$strCreateNewTable = '%s veritabanı üzerinde yeni bir tablo oluştur';
$strCreatePage = 'Yeni sayfa oluştur';
$strCreatePdfFeat = 'PDF\'lerin oluşturulması';
$strCriteria = 'Kriter';

$strData = 'Veri';
$strDataOnly = 'Sadece veri';
$strDatabase = 'Veritabanı ';
$strDatabaseHasBeenDropped = '%s veritabanı kaldırıldı.';
$strDatabaseWildcard = 'Veritabanı (* izin verili):';
$strDatabases = 'veritabanları';
$strDatabasesStats = 'Veritabanı istatistikleri';
$strDefault = 'Varsayılan';
$strDelete = 'Sil';
$strDeleteFailed = 'Silme sırasında hata oluştu!';
$strDeleteUserMessage = '%s kullanıcısını sildiniz.';
$strDeleted = 'Satır silindi.';
$strDeletedRows = 'Silinen satırlar:';
$strDescending = 'Azalan';
$strDisabled = 'Etkin değil';
$strDisplay = 'Görüntüle';
$strDisplayFeat = 'Özellikleri Göster';
$strDisplayOrder = 'Görünüm düzeni:';
$strDisplayPDF = 'PDF şemasını göster';
$strDoAQuery = '"Örnekle sorgu" yap (joker: "%")';
$strDoYouReally = 'Aşağıdaki komutu uygulamak istediğinizden emin misiniz? ';
$strDocu = 'Yardım';
$strDrop = 'Kaldır';
$strDropDB = 'Veritabanı\'nı kaldır %s';
$strDropTable = 'Tablo\'yu kaldır';
$strDumpXRows = ' %s satırdan başlayarak  %s a kadar çıktı üret.';
$strDumpingData = 'Tablo döküm verisi';
$strDynamic = 'dinamik';

$strEdit = 'Düzenle';
$strEditPDFPages = ' PDF Sayfalarını düzenle';
$strEditPrivileges = 'Öncelikleri Düzenle';
$strEffective = 'Efektif';
$strEmpty = 'Boşalt';
$strEmptyResultSet = 'MySQL boş bir sonuc kümesi döndürdü ( sıfır satır).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEnglishPrivileges = ' Not: mySQL  öncelik adları İngilizce olarak belirtilmiştir ';
$strError = 'Hata';
$strExplain = 'SQL\'i açıkla';
$strExport = 'Dönüştür';
$strExportToXML = 'XML formatına dönüştür';
$strExtendedInserts = 'Genişletilmiş eklemeler';
$strExtra = 'Ayrıca';

$strField = 'Alan';
$strFieldHasBeenDropped = '%s alanı kaldırılmıştır';
$strFields = 'Alanlar';
$strFieldsEmpty = ' Alan sayısı boş! ';
$strFieldsEnclosedBy = 'Alan ayırıcı işaret';//it does not seem well but just works
$strFieldsEscapedBy = 'Kaçış simgesi(özel işaretler için)';//it does not seem well but just works
$strFieldsTerminatedBy = 'Alan bitirici işaret';//it does not stand seem but just works
$strFixed = 'sabit';
$strFlushTable = 'Tabloyu kapat("FLUSH")';
$strFormEmpty = 'Form\'da eksik değer !';
$strFormat = 'Biçim';
$strFullText = 'Tüm metinler';
$strFunction = 'Fonksiyon';

$strGenBy = 'Oluşturuldu->:';
$strGenTime = 'Çıktı Tarihi';
$strGeneralRelationFeat = 'Genel ilişki özellikleri';
$strGo = 'Git';
$strGrants = 'Haklar';
$strGzip = '"gziplenmiş"';

$strHasBeenAltered = 'düzenlendi.';
$strHasBeenCreated = 'yaratıldı.';
$strHaveToShow = 'Görüntülemek için en az bir sütun seçmelisiniz';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfası';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Yükleme Sayfası';
$strHost = 'Sunucu:';
$strHostEmpty = 'Sunucu ismi alanı doldurulmadı!';

$strIdxFulltext = 'Tüm metinler';
$strIfYouWish = 'Eğer bir tablo\'nun sadece bazı sütunlarını yüklemek istiyorsanız,virgüllerle ayrılmış bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strInUse = 'kullanımda';
$strIndex = 'Index';
$strIndexHasBeenDropped = '%s index\'i silindi.';
$strIndexName = 'Index ismi :';
$strIndexType = 'Index tipi :';
$strIndexes = 'Index\'ler';
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir satır olarak ekle';
$strInsertNewRow = 'Yeni satır ekle';
$strInsertTextfiles = 'Tablo içine metin dosyası ekle';
$strInsertedRows = 'Eklenen satırlar:';
$strInstructions = 'Talimatlar';
$strInvalidName = '"%s" sözcüğü kullanılamayan sözcük.Veritabanı/tablo/alan ismi olarak kullanamassınız, you can\'t use it as a database/table/field name.';

$strKeepPass = 'Şifreyi değiştirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';

$strLength = 'Boyut';
$strLengthSet = 'Boyut/Değerler*';
$strLimitNumRows = 'Sayfa ba&#351;&#305;na kay&#305;t say&#305;s&#305;';
$strLineFeed = 'Satır: \\n';
$strLines = 'Satırlar';
$strLinesTerminatedBy = 'Satır sonu';
$strLinkNotFound = 'Link bulunamadı';
$strLinksTo = 'Linkler->';
$strLocationTextfile = 'Dosyadan yükle';
$strLogPassword = '&#350;ifre:';
$strLogUsername = 'Kullan&#305;c&#305; Ad&#305;:';
$strLogin = 'Login';
$strLogout = 'Çıkış';

$strMissingBracket = 'Parantez eksik';
$strModifications = 'Değişiklikler kaydedildi';
$strModify = 'Değiştir';
$strModifyIndexTopic = 'Index düzenle';
$strMoveTable = 'Tabloyu (veritabanı<b>.</b>tablo) taşı:';
$strMoveTableOK = '%s tablosu %s üzerine taşındı.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden yüklendi.';
$strMySQLSaid = 'MySQL çıktısı: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  üzerinde  %pma_s3% olarak çalışıyor';
$strMySQLShowProcess = 'İşlemleri göster';
$strMySQLShowStatus = 'MySQL çalışma zamanı bilgisini göster';
$strMySQLShowVars = 'MySQL sistem değişkenlerini göster';

$strName = 'İsim';
$strNext = 'Sonraki';
$strNo = 'Hayır';
$strNoDatabases = 'Veritabanı yok';
$strNoDescription = 'Tanımlama yok';
$strNoDropDatabases = '"DROP DATABASE" cümlesi burada kullanılamaz.';
$strNoExplain = 'SQL açıklamasını yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir taray&#305;c&#305; ile daha iyi çal&#305;&#351;maktad&#305;r...';
$strNoIndex = 'Index tan&#305;mlanmad&#305;!';
$strNoIndexPartsDefined = 'Index k&#305;sm&#305; tan&#305;mlanmad&#305;!';
$strNoModification = 'Değişiklik yok';
$strNoPassword = 'Şifre yok';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = 'Ayrıcalık yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak için yeterli haklara sahip değilsiniz!';
$strNoTablesFound = 'Veritabanı\'nda tablo bulunamadı.';
$strNoUsersFound = 'Kullanıcı(lar) bulunamadı.';
$strNoValidateSQL = 'SQL doğrulamasını yapma';
$strNone = 'Hiçbiri';
$strNotNumber = 'Bu bir sayı değil!';
$strNotOK = 'Tamam değil';
$strNotSet = '<b>%s</b> tablosu bulunamadı veya %s içinde tanımlanmadı';
$strNotValidNumber = ' geçerli bir satır sayısı değil!';
$strNull = 'Boş';
$strNumSearchResultsInTable = '%s eşleşim : %s tablosu içinde';
$strNumSearchResultsTotal = 'Toplam: %s eşleşim';

$strOK = 'Tamam';
$strOftenQuotation = 'Sık kullanılan aktarma işaretleri.SEÇİME BAĞLI,sadece char ve varchar alanlarının "enclosed-by" karakteri ile çevreneleceği anlamına gelir..';
$strOperations = 'İşlemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = 'Özel karakterleri yazmak ve okumak için kontroller.Opsiyonel';
$strOptionally = 'Seçime Bağlı';
$strOptions = 'Seçenekler';
$strOr = 'veya';
$strOverhead = 'Kullan&#305;lamayan Veri';

$strPHPVersion = 'PHP Sürümü';
$strPageNumber = 'Sayfa numarası:';
$strPartialText = 'Bölümsel Metinler';
$strPassword = 'Şifre';
$strPasswordEmpty = 'Şifre alanı doldurulmadı!';
$strPasswordNotSame = 'Girilen şifreler aynı değil!';
$strPdfDbSchema = ' "%s" veritabanının şeması - Sayfa %s';
$strPdfInvalidPageNum = 'Tanımlanmamış PDF sayfa numarası!';
$strPdfInvalidTblName = ' "%s" tablosu bulunamıyor !';
$strPhp = 'PHP kodu oluştur';
$strPmaDocumentation = 'phpMyAdmin yardım';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin değeri  konfigurasyon dosyasının içinde verilmelidir!';
$strPos1 = 'Başlangıç';
$strPrevious = 'Önceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal&#305;d&#305;r!';
$strPrimaryKeyWarning = '("PRIMARY" <b>sadece</b> bir anahtar&#305;n ismi <b>olmal&#305;d&#305;r!</b>)';
$strPrintView = 'Yazıcı görüntüsü';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'Öncelikler';
$strProperties = 'Özellikler';

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Veritabanı üzerinde SQL-sorgusu&nbsp;<b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';

$strReType = 'Yeniden gir';
$strRecords = 'Kayıtlar';
$strReferentialIntegrity = 'Referans bütünlüğünü kontrol et.';
$strRelationNotWorking = 'Bağlı tablolarla çalışmada kullanılan ekstra özellikler deaktif edildi...Niçin olduğunu öğrenmek için %sburaya%s tıklayınız...';
$strRelationView = 'İlişki görünümü';
$strReloadFailed = 'MySQL yeniden yüklenmesi gerçekleştirilemedi.';
$strReloadMySQL = 'MySQL\'i yeniden yükle';
$strRememberReload = 'Server\'ı yeniden yüklemeyi unutmayınız.';
$strRenameTable = 'Tablonun ismini şuna değiştir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adlandırıldı';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerdeğiştir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile değiştir';
$strReset = 'Sıfırla';
$strRevoke = 'Geçersiz kıl';
$strRevokeGrant = 'Hak geçersiz kıl';
$strRevokeGrantMessage = '%s için Grant önceli&#287;ini kald&#305;rd&#305;n&#305;z';
$strRevokeMessage = '%s\'in önceliklerini kald&#305;rd&#305;n&#305;z';
$strRevokePriv = 'Ayrıcalıkları geçersiz kıl';
$strRowLength = 'Satır boyu';
$strRowSize = ' Satır boyutu ';
$strRows = 'Satır Sayısı';
$strRowsFrom = '(kayıt)başlayacağı kayıt :';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s modunda ve %s hücre sonra ba&#351;l&#305;&#287;&#305; tekrarla';
$strRowsModeVertical = 'dikey';
$strRowsStatistic = 'Satır istatistiği';
$strRunQuery = 'Sorguyu çalıştır';
$strRunSQLQuery = '%s veritabanı üzerinde sorgu/sorgular çalıştır';
$strRunning = ': %s üzerinde çalışıyor...';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-sorgusu';
$strSQLResult = 'SQL sonucu';
$strSave = 'Kaydet';
$strScaleFactorSmall = 'Çarpan faktörü sayfadaki şema için çok küçük';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritabanında ara';
$strSearchInTables = 'Tablo(lar) içinde:';
$strSearchNeedle = 'Aranacak kelime veya değerler (joker: "%"):';
$strSearchOption1 = 'kelimelerin en azından biri';
$strSearchOption2 = 'bütün kelimeler';
$strSearchOption3 = 'tam eşleşim';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s için arama sonuçları:';
$strSearchType = 'Bul:';
$strSelect = 'Seç';
$strSelectADb = ' Lütfen bir veritaban&#305; seçiniz';
$strSelectAll = 'Tümünü seç';
$strSelectFields = 'Alan seç (en az bir):';
$strSelectNumRows = 'sorgu içerisinde';
$strSelectTables = 'Tabloları seç';
$strSend = 'Dosya olarak kaydet';
$strServerChoice = 'Server seçimi';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = 'Server sürümü';
$strSetEnumVal = 'Eğer alan tipi "enum" veya  "set" ise , lütfen verileri şu formata göre giriniz: \'a\',\'b\',\'c\'...<br>Eğer bu değerler arasına backslash ("\") veya tek tırnak koymanız gerekirse ("\'"),bunun için backslash kullanın (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'Göster:';
$strShowAll = 'Tümünü göster';
$strShowColor = 'Rengi göster';
$strShowCols = 'Bütün sütunları göster';
$strShowGrid = 'Izgarayı göster';
$strShowPHPInfo = 'PHP bilgisini göster';
$strShowTableDimension = 'Tabloların boyutlarını göster';
$strShowTables = 'Tabloları göster';
$strShowThisQuery = ' Bu sorguyu burda yine göster ';
$strShowingRecords = 'Kayıtları gösteriyor';
$strSingly = '(birer birer)';
$strSize = 'Boyut';
$strSort = 'Sırala';
$strSpaceUsage = 'Kullanılan alan';
$strSplitWordsWithSpace = 'Kelimeler bir boşluk karakteriyle bölünmüştür (" ").';
$strStatement = 'İfadeler';
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yapı ve Veri';
$strStrucDrop = '\'Drop table\' ekle';
$strStrucExcelCSV = 'MS Excel verisi için CSV';
$strStrucOnly = 'Sadece yapı';
$strStructPropose = 'Tablo yapısını ayarla(mysql,tablo yapısını optimize eder)';
$strStructure = 'Yapı';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz başarıyla çalıştırılmıştır';
$strSum = 'toplam';

$strTable = 'Tablo';
$strTableComments = 'Tablo yorumları';
$strTableEmpty = 'Tablo ismi boş!';
$strTableHasBeenDropped = '%s tablosu kaldırılmıştır';
$strTableHasBeenEmptied = '%s tablosu boşaltılmıştır';
$strTableHasBeenFlushed = '%s tablosu ba&#351;ar&#305;yla kapat&#305;lm&#305;&#351;t&#305;r.';
$strTableMaintenance = 'Tablo bakımı';
$strTableStructure = 'Tablo için tablo yapısı';
$strTableType = 'Tablo tipi';
$strTables = '%s tablo';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan düzenlenmeyebilir ';
$strTheContent = 'Dosyanızın içeriği eklendi.';
$strTheContents = 'Dosyanın içeriği tablonun içeriğini aynı birincil veya unique anahtar değerli sütunlar için yer değiştirir..';
$strTheTerminator = 'Alan bitimini belirten işaret.';
$strTotal = 'toplam';
$strType = 'Tip';

$strUncheckAll = 'Hiçbirisini Seçme';
$strUnique = 'Unique';
$strUnselectAll = 'Hiçbirisini seçme';
$strUpdatePrivMessage = '%s için olan ayrıcalıkları güncellediniz.';
$strUpdateProfile = 'Profil güncelle:';
$strUpdateProfileMessage = 'Profil güncellendi.';
$strUpdateQuery = 'Sorguyu güncelle';
$strUsage = 'Kullanım';
$strUseBackquotes = 'Tablo ve alan isimleri için ters tırnak " ` " işaretini kullan';
$strUseTables = 'Tabloları kullan';
$strUser = 'Kullanıcı:';
$strUserEmpty = 'Kullanıcı ismi alanı doldurulmadı!';
$strUserName = 'Kullanıcı ismi';
$strUsers = 'Kullanıcılar';

$strValidateSQL = 'SQL\'i doğrula';
$strValue = 'Değer';
$strViewDump = 'Tablo\'nun döküm(şema)\'ünü göster';
$strViewDumpDB = 'Veritabanı\'nın döküm(şema)\'ünü göster';

$strWelcome = '%s \'e HOŞGELDİNİZ....';
$strWithChecked = 'seçilileri:';
$strWrongUser = 'Hatalı kullanıcı/parola. Erişim engellendi.';

$strYes = 'Evet';

$strZip = '"ziplenmiş"';
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
