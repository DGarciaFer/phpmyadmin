<?php
/* $Id$ */

/*
 * Finnish language file by Visa Kopu, visa@visakopu.net
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kesä', 'Heinä', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';

$strAPrimaryKey = 'Sarakkeelle %s on lisätty ensisijainen avain';
$strAccessDenied = 'Pääsy kielletty';
$strAction = 'Toiminto';
$strAddDeleteColumn = 'Lisää/poista sarakkeita';
$strAddDeleteRow = 'Lisää/poista hakuehtoja';
$strAddNewField = 'Lisää sarake';
$strAddPriv = 'Lisää käyttöoikeus';
$strAddPrivMessage = 'Olet lisännyt uuden käyttöoikeuden.';
$strAddSearchConditions = 'Lisää hakuehtoja ("where"-lauseen sisältö):';
$strAddToIndex = 'Lisää indeksi  %s sarakkeisiin';
$strAddUser = 'Lisää uusi käyttäjä';
$strAddUserMessage = 'Olet lisännyt uuden käyttäjän.';
$strAffectedRows = 'Rivejä:';
$strAfter = 'Jälkeen sarakkeen %s';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lisää uusi rivi';
$strAll = 'Kaikki';
$strAllTableSameWidth = 'Näytä kaikki taulut samanlevyisinä?';
$strAlterOrderBy = 'Järjestä taulu';
$strAnIndex = 'Sarakkeelle %s on lisätty indeksi';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAny = 'Mikä tahansa';
$strAnyColumn = 'Mikä tahansa sarake';
$strAnyDatabase = 'Mikä tahansa tietokanta';
$strAnyHost = 'Mikä tahansa palvelin';
$strAnyTable = 'Mikä tahansa taulu';
$strAnyUser = 'Mikä tahansa käyttäjä';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';

$strBack = 'Takaisin';
$strBeginCut = 'ALOITA CUT';
$strBeginRaw = 'ALOITA RAW';
$strBinary = 'Binääridata';
$strBinaryDoNotEdit = 'Binääridataa - älä muokkaa';
$strBookmarkDeleted = 'Tallennettu SQL-lause on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-lause';
$strBookmarkThis = 'Tallenna SQL-lause';
$strBookmarkView = 'Näytä';
$strBrowse = 'Selaa';
$strBzip = '"bzip-pakattu"';

$strCantLoadMySQL = 'MySQL-laajennusta ei voitu ladata,<br />tarkista PHP:n asetukset.';
$strCantLoadRecodeIconv = 'Merkistön konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli näiden laajennusten käyttö tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantRenameIdxToPrimary = 'Indeksiä ei voi muuttaa PRIMARY-nimiseksi!';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu käyttää. Tarkista PHP:n asetukset.';
$strCardinality = 'Kardinaliteetti';
$strCarriage = 'CR-rivinvaihto: \\r';
$strChange = 'Muokkaa';
$strChangeDisplay = 'Valitse näytettävä sarake';
$strChangePassword = 'Vaihda salasanaa';
$strCharsetOfFile = 'Tiedoston merkistö:';
$strCheckAll = 'Valitse kaikki';
$strCheckDbPriv = 'Tarkista tietokannan käyttöoikeudet';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColComFeat = 'Sarakkeiden kommentit näkyvissä';
$strColumn = 'Sarake';
$strColumnNames = 'Sarakkeiden nimet';
$strComments = 'Kommentit';
$strCompleteInserts = 'Täydelliset insert-lauseet';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />Tämä saattaa johtua virheestä, jonka PHP löysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkistä ja lukea mahdolliset PHP-virheilmoituikset. Todennäköisimmin joltain riviltä puuttuu lainausmerkki tai puolipiste.<br />Jos linkistä avautuva sivu on tyhjä, asetustiedostosta ei löytynyt virhettä.';
$strConfigureTableCoord = 'Määrittele koordinaatit taululle %s';
$strConfirm = 'Oletko varma, että haluat tehdä tämän?';
$strCookiesRequired = 'Selaimessa pitää olla cookietuki päällä tästä eteenpäin.';
$strCopyTable = 'Kopioi taulu (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCreate = 'Luo';
$strCreateIndex = 'Luo sarakkeista indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan %s';
$strCreatePage = 'Luo uusi sivu';
$strCreatePdfFeat = 'PDF-tiedostojen luonti';
$strCriteria = 'Hakuehdot';

$strData = 'Data';
$strDataOnly = 'Vain data';
$strDatabase = 'Tietokanta ';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabaseWildcard = 'Tietokanta (voit käyttää jokerimerkkejä):';
$strDatabases = 'tietokantaa';
$strDatabasesStats = 'Tietokantastatistiikka';
$strDefault = 'Oletusarvo';
$strDelete = 'Poista';
$strDeleteFailed = 'Poistaminen epäonnistui!';
$strDeleteUserMessage = 'Käyttäjä %s on poistettu.';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDescending = 'Laskeva';
$strDisabled = 'Pois päältä';
$strDisplay = 'Näytä';
$strDisplayFeat = 'Ulkoasun asetukset';
$strDisplayOrder = 'Lajittelujärjestys:';
$strDisplayPDF = 'Näytä PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen haku" (jokerimerkki: "%")';
$strDoYouReally = 'Oletko varma että haluat ';
$strDocu = 'Ohjeet';
$strDrop = 'Pudota';
$strDropDB = 'Pudota tietokanta %s';
$strDropTable = 'Pudota taulu';
$strDumpXRows = 'Tee vedos %s rivistä, alkaen rivistä %s.';
$strDumpingData = 'Vedostan dataa taulusta';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa käyttöoikeuksia';
$strEffective = 'Varsinainen';
$strEmpty = 'Tyhjennä';
$strEmptyResultSet = 'MySQL palautti tyhjän vastauksen (ts. nolla riviä).';
$strEnabled = 'Päällä';
$strEnd = 'Loppu';
$strEndCut = 'LOPETA CUT';
$strEndRaw = 'LOPETA RAW';
$strEnglishPrivileges = ' Huom. MySQL-käyttöoikeuksien nimet ovat englanniksi ';
$strError = 'Virhe';
$strExplain = 'Selitä SQL-lause';
$strExport = 'Tulosta tiedostoksi/ruudulle';
$strExportToXML = 'Rakenne ja data XML-muodossa';
$strExtendedInserts = 'Yhteinen insert-lause';
$strExtra = 'Lisätiedot';

$strField = 'Sarake';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFields = 'Sarakkeet';
$strFieldsEmpty = ' Sarakkeiden lukumäärä on nolla! ';
$strFieldsEnclosedBy = 'Sarakkeiden ympäröintimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFixed = 'kiinteä';
$strFlushTable = 'Tyhjennä taulun välimuisti ("FLUSH")';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFormat = 'Muoto';
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';

$strGenBy = 'Generoinut:';
$strGenTime = 'Luontiaika';
$strGeneralRelationFeat = 'Yleiset relaatio-ominaisuudet';
$strGo = 'Suorita';
$strGrants = 'Luvat';
$strGzip = '"gzip-pakattu"';

$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse vähintään yksi sarake';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin viralliset sivut';
$strHomepageSourceforge = 'phpMyAdminin sivut SourceForge-palvelussa';
$strHost = 'Palvelin';
$strHostEmpty = 'Palvelimen nimi puuttuu!';

$strIdxFulltext = 'Koko teksti';
$strIfYouWish = 'Jos haluat hakea vain osan taulun sarakkeista, syötä pilkuilla erotettu lista sarakkeiden nimistä.';
$strIgnore = 'Jätä huomiotta';
$strInUse = 'käytössä';
$strIndex = 'Indeksi';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strIndexes = 'Indeksit';
$strInsecureMySQL = 'Asetustiedostosi käyttää asetuksia, jotka viittaavat MySQL:n oletusarvoiseen käyttäjään (root ilman salasanaa). Tällaisilla asetuksilla käytettäessä MySQL-palvelin on arka hyökkäyksille. Tämä tietoturvariski olisi syytä korjata pikimmiten!';
$strInsert = 'Lisää rivi';
$strInsertAsNewRow = 'Lisää uutena rivinä';
$strInsertNewRow = 'Lisää uusi rivi';
$strInsertTextfiles = 'Syötä tekstitiedosto tauluun';
$strInsertedRows = 'Lisätyt rivit:';
$strInstructions = 'komentoa';
$strInvalidName = '"%s" on varattu sana eikä sitä voi käyttää tietokannan, taulun tai sarakkeen nimenä.';

$strKeepPass = 'Älä vaihda salasanaa';
$strKeyname = 'Avaimen nimi';
$strKill = 'Tapa';

$strLength = 'Pituus';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivejä/sivu';
$strLineFeed = 'LF-rivinvaihto: \\n';
$strLines = 'Rivit';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkkiä ei löydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLocationTextfile = 'Tiedoston sijainti';
$strLogPassword = 'Salasana:';
$strLogUsername = 'Käyttäjätunnus:';
$strLogin = 'Kirjaudu sisään';
$strLogout = 'Poistu';

$strMissingBracket = 'Hakasulku puuttuu';
$strModifications = 'Muutokset tallennettu';
$strModify = 'Muokkaa';
$strModifyIndexTopic = 'Muokkaa indeksiä';
$strMoveTable = 'Siirrä taulu (tietokanta<b>.</b>taulu):';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMySQLCharset = 'MySQL:n merkistö';
$strMySQLReloaded = 'MySQL uudelleenladattu.';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% palvelimella %pma_s2% käyttäjänä %pma_s3%';
$strMySQLShowProcess = 'Näytä prosessit';
$strMySQLShowStatus = 'Näytä MySQL:n ajonaikaiset tiedot';
$strMySQLShowVars = 'Näytä MySQL:n järjestelmämuuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNo = 'Ei';
$strNoDatabases = 'Ei tietokantoja';
$strNoDescription = 'ei selitystä';
$strNoDropDatabases = '"DROP DATABASE"-lauseiden käyttö on estetty.';
$strNoExplain = 'Älä selitä SQL-lausetta';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksiä</b> tukevalla selaimella.';
$strNoIndex = 'Indeksiä ei ole määritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole määritelty!';
$strNoModification = 'Ei muutoksia';
$strNoPassword = 'Ei salasanaa';
$strNoPhp = 'Piilota PHP-koodi';
$strNoPrivileges = 'Ei käyttöoikeuksia';
$strNoQuery = 'Ei SQL lausetta!';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoTablesFound = 'Tietokannasta ei löytynyt yhtään taulua.';
$strNoUsersFound = 'Käyttäjiä ei löytynyt.';
$strNoValidateSQL = 'Älä tarkista SQL-lausetta';
$strNone = 'Ei mitään';
$strNotNumber = 'Tämä ei ole numero!';
$strNotOK = 'Ei kunnossa';
$strNotSet = '<b>%s</b>-taulua ei löytynyt tai sitä ei ole määritelty %s-tiedostossa';
$strNotValidNumber = ' ei ole hyväksyttävä rivin numero!';
$strNull = 'Tyhjä';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteensä:</b> <i>%s</i> hakutulosta';

$strOK = 'Kunnossa';
$strOftenQuotation = 'Yleensä lainausmerkki. "Valinnaisesti" tarkoittaa, että vain char- ja varchar-tyyppiset sarakkeet ympäröidään annetulla ympäröintimerkillä.';
$strOperations = 'Toiminnot';
$strOptimizeTable = 'Optimoi taulu';
$strOptionalControls = 'Valinnainen. Ohjaa erikoismerkkien lukua ja kirjoitusta.';
$strOptionally = 'Valinnaisesti';
$strOptions = 'Lisävalinnat';
$strOr = 'Tai';
$strOverhead = 'Käyttämätön';

$strPHPVersion = 'PHP:n versio';
$strPageNumber = 'Sivunnumero:';
$strPartialText = 'Osittaiset tekstit';
$strPassword = 'Salasana';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordNotSame = 'Salasanat eivät ole samat!';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidPageNum = 'PDF:n sivunumeroa ei ole määritelty!';
$strPdfInvalidTblName = 'Taulua "%s" ei löydy!';
$strPdfNoTables = 'Ei tauluja';
$strPhp = 'Näytä PHP-koodi';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> täytyy määritellä asetustiedostossa!';
$strPos1 = 'Alku';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKey = 'Ensisijainen avain';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimenä pitää olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vain ja ainoastaan</b>ensisijaisen avaimen nimenä!)';
$strPrintView = 'Tulostusversio';
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivileges = 'Käyttöoikeudet';
$strProperties = 'Asetukset';
$strPutColNames = 'Laita sarakkeiden nimet ensimmäiselle riville';

$strQBE = 'Esimerkin mukainen haku';
$strQBEDel = 'Poista';
$strQBEIns = 'Lisää';
$strQueryOnDb = 'Suorita SQL-lause tietokannassa <b>%s</b>:';
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';

$strReType = 'Kirjoita uudelleen';
$strRecords = 'riviä';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRelationNotWorking = 'Relaatioihin ja linkitettyihin tauluihin liittyvät lisäominaisuudet ovat pois päältä. Katso %stäältä%s lisätietoja.';
$strRelationView = 'Relaationäkymä';
$strReloadFailed = 'MySQL:n uudelleenlataus epäonnistui.';
$strReloadMySQL = 'Lataa MySQL uudelleen';
$strRememberReload = 'Muista käynnistää palvelin uudestaan.';
$strRenameTable = 'Nimeä taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplace = 'Korvaa';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReset = 'Tyhjennä';
$strRevoke = 'Mitätöi';
$strRevokeGrant = 'Mitätöi lupa';
$strRevokeGrantMessage = 'Olet peruuttanut käyttäjän %s GRANT-oikeuden';
$strRevokeMessage = 'Olet peruuttanut käyttäjän %s käyttöoikeudet';
$strRevokePriv = 'Mitätöi käyttöoikeudet';
$strRowLength = 'Rivin pituus';
$strRowSize = ' Rivin koko ';
$strRows = 'riviä';
$strRowsFrom = 'riviä alkaen rivistä';
$strRowsModeHorizontal = 'vaakasuora';
$strRowsModeOptions = '%ssti, otsikoita toistetaan %s:n rivin välein';
$strRowsModeVertical = 'pystysuora';
$strRowsStatistic = 'Rivistatistiikka';
$strRunQuery = 'Suorita';
$strRunSQLQuery = 'Suorita SQL-lauseita tietokannassa %s';
$strRunning = 'palvelimella %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Olet mahdollisesti löytänyt ohjelmointivirheen SQL-parserista. Tarkista SQL-lauseesi, erityisesti lainausmerkit merkkijonojen alusta ja lopusta. Toinen mahdollinen virheen aiheuttaja on se, että olet siirtämässä tiedostoa, jossa on binääridataa lainausmerkkien ulkopuolella. Jos mahdollista, kokeile SQL-lausettasi suoraan komentoriviltä. MySQL:n antama virheilmoitus näkyy alla, jos serveri sellaisen antoi. Jos lause toimi komentorivillä, mutta ei phpMyAdminissa, kokeile etsiä se rivi, joka virheilmoituksen aiheutti ja lähetä meille bugiraportti, johon liität alla olevan koodin:';
$strSQLParserUserError = 'SQL-lauseessasi oli virhe. There seems to be an error in your SQL query. MySQL:n antama virheilmoitus näkyy alla, jos serveri sellaisen antoi';
$strSQLQuery = 'SQL-lause';
$strSQLResult = 'SQL-lauseen tulos';
$strSQPBugInvalidIdentifer = 'Epäkelpo tunniste';
$strSQPBugUnclosedQuote = 'Toinen lainausmerkki puuttuu merkkijonon lopusta';
$strSQPBugUnknownPunctuation = 'Tuntematon välimerkki';
$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle tällä skaalauksella';
$strSearch = 'Hae';
$strSearchFormTitle = 'Hae tietokannassa';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkkiä voi käyttää jokerimerkkinä):';
$strSearchOption1 = 'vähintään yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSelect = 'Hae';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectFields = 'Valitse sarakkeet (vähintään yksi):';
$strSelectNumRows = 'lauseessa';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoksi';
$strServer = 'Palvelin %s';
$strServerChoice = 'Valitse palvelin';
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVersion = 'Palvelimen versio';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", syötä vaaditut arvot tässä muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkkiä ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShow = 'Näytä';
$strShowAll = 'Näytä kaikki';
$strShowColor = 'Näytä värit';
$strShowCols = 'Näytä sarakkeet';
$strShowGrid = 'Näytä ruudukko';
$strShowPHPInfo = 'Näytä tietoja PHP:n asetuksista';
$strShowTableDimension = 'Näytä taulujen ulottuvuus';
$strShowTables = 'Näytä taulut';
$strShowThisQuery = ' Näytä lause uudelleen ';
$strShowingRecords = 'Näkyvillä rivit ';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSort = 'Järjestys';
$strSpaceUsage = 'Levytilan käyttö';
$strSplitWordsWithSpace = 'Sanat erotellaan välilyönnillä.';
$strStatement = 'Tieto';
$strStrucCSV = 'CSV-muotoinen data';
$strStrucData = 'Rakenne ja data';
$strStrucDrop = 'Lisää \'DROP TABLE\'-rivit';
$strStrucExcelCSV = 'CSV-muoto MS Exceliä varten';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Ehdota taulun rakennetta';
$strStructure = 'Rakenne';
$strSubmit = 'Lähetä';
$strSuccess = 'SQL-lause on suoritettu';
$strSum = 'Summa';

$strTable = 'Taulu';
$strTableComments = 'Kommentoi taulua';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s välimuisti on tyhjennetty';
$strTableMaintenance = 'Taulun huolto';
$strTableStructure = 'Rakenne taululle';
$strTableType = 'Taulun muoto';
$strTables = '%s taulu(a)';
$strTextAreaLength = ' Pituudestaan johtuen<br /> tätä saraketta ei ehkä voi muokata ';
$strTheContent = 'Tiedoston sisältö on syötetty.';
$strTheContents = 'Tiedoston sisältö korvaa valitusta taulusta ne rivit, joissa on sama ensisijainen (primary) tai yksikäsitteinen (unique) avain kuin tiedoston riveissä.';
$strTheTerminator = 'Sarakkeiden erotin.';
$strTotal = 'yhteensä';
$strType = 'Tyyppi';

$strUncheckAll = 'Poista valinta kaikista';
$strUnique = 'Uniikki';
$strUnselectAll = 'Poista valinta kaikista';
$strUpdatePrivMessage = 'Käyttäjän %s käyttöoikeudet on päivitetty.';
$strUpdateProfile = 'Päivitä profiili:';
$strUpdateProfileMessage = 'Profiili on päivitetty.';
$strUpdateQuery = 'Päivitä lause';
$strUsage = 'Tila';
$strUseBackquotes = 'Laita taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUseTables = 'Käytä tauluja';
$strUser = 'Käyttäjä';
$strUserEmpty = 'Käyttäjän nimi puuttuu!';
$strUserName = 'Käyttäjänimi';
$strUsers = 'Käyttäjät';

$strValidateSQL = 'Tarkista SQL-lause';
$strValidatorError = 'SQL-validaattoria ei voitu käynnistää. Tarkista, että olet asentanut tarpeelliset PHP-laajennukset. Lisää tietoa löytyy %sdokumentaatiosta%s.';
$strValue = 'Arvo';
$strViewDump = 'Tee vedos (dump) taulusta';
$strViewDumpDB = 'Tee vedos (dump) tietokannasta';

$strWebServerUploadDirectory = 'palvelimen hakemisto tiedostojen siirtoa varten';
$strWebServerUploadDirectoryError = 'Valitsemaasi hakemistoa ei voitu käyttää tiedostojen siirtämiseen';
$strWelcome = 'Tervetuloa, toivottaa %s';
$strWithChecked = 'Valitut:';
$strWrongUser = 'Väärä käyttäjätunnus tai salasana. Pääsy kielletty.';

$strYes = 'Kyllä';

$strZip = '"zip-pakattu"';
// To translate
$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strAdministration = 'Administration'; //to translate

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

$strFailedAttempts = 'Failed attempts'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate

$strGlobalPrivileges = 'Global privileges'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strGrantOption = 'Grant'; //to translate

$strId = 'ID'; //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate

$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate

$strLaTeX = 'LaTeX';  //to translate
$strLandscape = 'Landscape';  //to translate

$strMoreStatusVars = 'More status variables'; //to translate

$strNumTables = 'Tables'; //to translate


$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate
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

$strQueryType = 'Query type'; //to translate

$strReceived = 'Received'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate

$strSent = 'Sent'; //to translate
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

$strVar = 'Variable'; //to translate

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
