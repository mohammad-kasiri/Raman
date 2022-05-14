<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Str;

class PhoneNumber implements Rule
{
    private string $message;


    public function passes($attribute, $value)
    {
        //Get Phone Length
        $phoneLength   = Str::length($value);
        //Get Country Code
        $countryCode   = Str::substr($value, 0               , $phoneLength-10);
        //Get Phone Number
        $phoneNumber   = Str::substr($value, $phoneLength-10 , $phoneLength);

        //Refactor Iranian Country Code
        if ($countryCode == "" || $countryCode == "0" || $countryCode== "+98") $countryCode = "98";

        //Check Length
        if ($phoneLength < 10 || $phoneLength > 15)
        {
            $this->message = "طول شماره تلفن وارد شده اشتباه است";
            return false;
        }

        //Check , is it Numeric?
        if (!is_numeric($phoneNumber))
        {
            $this->message = "شماره تلفن باید فقط شامل اعداد باشد";
            return false;
        }

        //Check Country code
        if (!$this->checkCountryCode($countryCode)) {
            $this->message = "پیش شماره ی کشور وارد شده صحیح نمی باشد";
            return false;
        }

        //Check Iranian Operator
        if ($countryCode == "98" && !$this->checkIranOperators($phoneNumber)) {
            $this->message = "پیش شماره ی اپراتور تلفن همراه وارد شده صحیح نمی باشد";
            return false;
        }

        return true;
    }


    private function checkCountryCode($countryCode): bool
    {

        $chars  = ["00"  , "+"];

        //Refactore Country Code Format Based on "+" , "00"
        foreach ($chars as $char)
        {
            if (Str::startsWith($countryCode,$char))
                $countryCode = Str::replaceFirst($char, '', $countryCode);
        }

        //Check Country Code
        foreach ($this->validCountryCodes as $country) {
            if ($countryCode == $country['code']) return true;
        }

        return  false;
    }


    private function checkIranOperators($phoneNumber):bool
    {
        //Does Phone Number Have A Valid Operator
        foreach ($this->iranOperators as $operator) {
            if (Str::startsWith($phoneNumber, $operator))  return true;
        }

        return false;
    }



    public function message()
    {
        return $this->message;
    }


    private array $iranOperators     = [
        //irancel
        "930" , "933" , "935" , "936" , "937" , "938" , "939" , "901" , "902" , "903" , "904" , "905", "941",
        //IR-MCI
        "910" , "911" , "912" , "913" , "914" , "915" , "916" , "917" , "918" , "919" , "990" , "991" , "992" , "993" , "994",
        //Rightel
        "920" , "921" , "922",
        //Taliya
        "932" ,
        //TeleKish
        "934" ,
        //Aptel
        "99910" , "99911" , "99913" ,
        //azartel
        "99914" ,
        //SamanTel
        "99999" , "99998" , "99997" , "99996" ,
        //LOTUSTEL
        "9990" ,
        //Shatel Mobile
        "99810" , "99811" , "99812" , "99814" , "99815" ,
        //ArianTel
        "9998" ];

    private array $validCountryCodes =  [
        ['name'=>'IRAN','code'=>'98']
    ];

    private array $allCountryCodes   = [
        ['name'=>'ANDORRA'                         ,'code'=>'376'   ],
        ['name'=>'UNITED ARAB EMIRATES'            ,'code'=>'971'   ],
        ['name'=>'AFGHANISTAN'                     ,'code'=>'93'    ],
        ['name'=>'ANTIGUA AND BARBUDA'             ,'code'=>'1268'  ],
        ['name'=>'ANGUILLA'                        ,'code'=>'1264'  ],
        ['name'=>'ALBANIA'                         ,'code'=>'355'   ],
        ['name'=>'ARMENIA'                         ,'code'=>'374'   ],
        ['name'=>'NETHERLANDS ANTILLES'            ,'code'=>'599'   ],
        ['name'=>'ANGOLA'                          ,'code'=>'244'   ],
        ['name'=>'ANTARCTICA'                      ,'code'=>'672'   ],
        ['name'=>'ARGENTINA'                       ,'code'=>'54'    ],
        ['name'=>'AMERICAN SAMOA'                  ,'code'=>'1684'  ],
        ['name'=>'AUSTRIA'                         ,'code'=>'43'    ],
        ['name'=>'AUSTRALIA'                       ,'code'=>'61'    ],
        ['name'=>'ARUBA'                           ,'code'=>'297'   ],
        ['name'=>'AZERBAIJAN'                      ,'code'=>'994'   ],
        ['name'=>'BOSNIA AND HERZEGOVINA'          ,'code'=>'387'   ],
        ['name'=>'BARBADOS'                        ,'code'=>'1246'  ],
        ['name'=>'BANGLADESH'                      ,'code'=>'880'   ],
        ['name'=>'BELGIUM'                         ,'code'=>'32'    ],
        ['name'=>'BURKINA FASO'                    ,'code'=>'226'   ],
        ['name'=>'BULGARIA'                        ,'code'=>'359'   ],
        ['name'=>'BAHRAIN'                         ,'code'=>'973'   ],
        ['name'=>'BURUNDI'                         ,'code'=>'257'   ],
        ['name'=>'BENIN'                           ,'code'=>'229'   ],
        ['name'=>'SAINT BARTHELEMY'                ,'code'=>'590'   ],
        ['name'=>'BERMUDA'                         ,'code'=>'1441'  ],
        ['name'=>'BRUNEI DARUSSALAM'               ,'code'=>'673'   ],
        ['name'=>'BOLIVIA'                         ,'code'=>'591'   ],
        ['name'=>'BRAZIL'                          ,'code'=>'55'    ],
        ['name'=>'BAHAMAS'                         ,'code'=>'1242'  ],
        ['name'=>'BHUTAN'                          ,'code'=>'975'   ],
        ['name'=>'BOTSWANA'                        ,'code'=>'267'   ],
        ['name'=>'BELARUS'                         ,'code'=>'375'   ],
        ['name'=>'BELIZE'                          ,'code'=>'501'   ],
        ['name'=>'COCOS (KEELING) ISLANDS'         ,'code'=>'61'    ],
        ['name'=>'CONGO'                           ,'code'=>'243'   ],
        ['name'=>'CENTRAL AFRICAN REPUBLIC'        ,'code'=>'236'   ],
        ['name'=>'CONGO'                           ,'code'=>'242'   ],
        ['name'=>'SWITZERLAND'                     ,'code'=>'41'    ],
        ['name'=>'COTE D IVOIRE'                   ,'code'=>'225'   ],
        ['name'=>'COOK ISLANDS'                    ,'code'=>'682'   ],
        ['name'=>'CHILE'                           ,'code'=>'56'    ],
        ['name'=>'CAMEROON'                        ,'code'=>'237'   ],
        ['name'=>'CHINA'                           ,'code'=>'86'    ],
        ['name'=>'COLOMBIA'                        ,'code'=>'57'    ],
        ['name'=>'COSTA RICA'                      ,'code'=>'506'   ],
        ['name'=>'CUBA'                            ,'code'=>'53'    ],
        ['name'=>'CAPE VERDE'                      ,'code'=>'238'   ],
        ['name'=>'CHRISTMAS ISLAND'                ,'code'=>'61'    ],
        ['name'=>'CYPRUS'                          ,'code'=>'357'   ],
        ['name'=>'CZECH REPUBLIC'                  ,'code'=>'420'   ],
        ['name'=>'GERMANY'                         ,'code'=>'49'    ],
        ['name'=>'DJIBOUTI'                        ,'code'=>'253'   ],
        ['name'=>'DENMARK'                         ,'code'=>'45'    ],
        ['name'=>'DOMINICA'                        ,'code'=>'1767'  ],
        ['name'=>'DOMINICAN REPUBLIC'              ,'code'=>'1809'  ],
        ['name'=>'ALGERIA'                         ,'code'=>'213'   ],
        ['name'=>'ECUADOR'                         ,'code'=>'593'   ],
        ['name'=>'ESTONIA'                         ,'code'=>'372'   ],
        ['name'=>'EGYPT'                           ,'code'=>'20'    ],
        ['name'=>'ERITREA'                         ,'code'=>'291'   ],
        ['name'=>'SPAIN'                           ,'code'=>'34'    ],
        ['name'=>'ETHIOPIA'                        ,'code'=>'251'   ],
        ['name'=>'FINLAND'                         ,'code'=>'358'   ],
        ['name'=>'FIJI'                            ,'code'=>'679'   ],
        ['name'=>'FALKLAND ISLANDS (MALVINAS)'     ,'code'=>'500'   ],
        ['name'=>'MICRONESIA, FEDERATED STATES OF' ,'code'=>'691'   ],
        ['name'=>'FAROE ISLANDS'                   ,'code'=>'298'   ],
        ['name'=>'FRANCE'                          ,'code'=>'33'    ],
        ['name'=>'GABON'                           ,'code'=>'241'   ],
        ['name'=>'UNITED KINGDOM'                  ,'code'=>'44'    ],
        ['name'=>'GRENADA'                         ,'code'=>'1473'  ],
        ['name'=>'GEORGIA'                         ,'code'=>'995'   ],
        ['name'=>'GHANA'                           ,'code'=>'233'   ],
        ['name'=>'GIBRALTAR'                       ,'code'=>'350'   ],
        ['name'=>'GREENLAND'                       ,'code'=>'299'   ],
        ['name'=>'GAMBIA'                          ,'code'=>'220'   ],
        ['name'=>'GUINEA'                          ,'code'=>'224'   ],
        ['name'=>'EQUATORIAL GUINEA'               ,'code'=>'240'   ],
        ['name'=>'GREECE'                          ,'code'=>'30'    ],
        ['name'=>'GUATEMALA'                       ,'code'=>'502'   ],
        ['name'=>'GUAM'                            ,'code'=>'1671'  ],
        ['name'=>'GUINEA-BISSAU'                   ,'code'=>'245'   ],
        ['name'=>'GUYANA'                          ,'code'=>'592'   ],
        ['name'=>'HONG KONG'                       ,'code'=>'852'   ],
        ['name'=>'HONDURAS'                        ,'code'=>'504'   ],
        ['name'=>'CROATIA'                         ,'code'=>'385'   ],
        ['name'=>'HAITI'                           ,'code'=>'509'   ],
        ['name'=>'HUNGARY'                         ,'code'=>'36'    ],
        ['name'=>'INDONESIA'                       ,'code'=>'62'    ],
        ['name'=>'IRELAND'                         ,'code'=>'353'   ],
        ['name'=>'ISRAEL'                          ,'code'=>'972'   ],
        ['name'=>'ISLE OF MAN'                     ,'code'=>'44'    ],
        ['name'=>'INDIA'                           ,'code'=>'91'    ],
        ['name'=>'IRAQ'                            ,'code'=>'964'   ],
        ['name'=>'IRAN'                            ,'code'=>'98'    ],
        ['name'=>'ICELAND'                         ,'code'=>'354'   ],
        ['name'=>'ITALY'                           ,'code'=>'39'    ],
        ['name'=>'JAMAICA'                         ,'code'=>'1876'  ],
        ['name'=>'JORDAN'                          ,'code'=>'962'   ],
        ['name'=>'JAPAN'                           ,'code'=>'81'    ],
        ['name'=>'KENYA'                           ,'code'=>'254'   ],
        ['name'=>'KYRGYZSTAN'                      ,'code'=>'996'   ],
        ['name'=>'CAMBODIA'                        ,'code'=>'855'   ],
        ['name'=>'KIRIBATI'                        ,'code'=>'686'   ],
        ['name'=>'COMOROS'                         ,'code'=>'269'   ],
        ['name'=>'SAINT KITTS AND NEVIS'           ,'code'=>'1869'  ],
        ['name'=>'North Korea'                     ,'code'=>'850'   ],
        ['name'=>'South Korea'                     ,'code'=>'82'    ],
        ['name'=>'KUWAIT'                          ,'code'=>'965'   ],
        ['name'=>'CAYMAN ISLANDS'                  ,'code'=>'1345'  ],
        ['name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC' ,'code'=>'856'   ],
        ['name'=>'LEBANON'                         ,'code'=>'961'   ],
        ['name'=>'SAINT LUCIA'                     ,'code'=>'1758'  ],
        ['name'=>'LIECHTENSTEIN'                   ,'code'=>'423'   ],
        ['name'=>'SRI LANKA'                       ,'code'=>'94'    ],
        ['name'=>'LIBERIA'                         ,'code'=>'231'   ],
        ['name'=>'LESOTHO'                         ,'code'=>'266'   ],
        ['name'=>'LITHUANIA'                       ,'code'=>'370'   ],
        ['name'=>'LUXEMBOURG'                      ,'code'=>'352'   ],
        ['name'=>'LATVIA'                          ,'code'=>'371'   ],
        ['name'=>'LIBYAN ARAB JAMAHIRIYA'          ,'code'=>'218'   ],
        ['name'=>'MOROCCO'                         ,'code'=>'212'   ],
        ['name'=>'MONACO'                          ,'code'=>'377'   ],
        ['name'=>'MOLDOVA, REPUBLIC OF'            ,'code'=>'373'   ],
        ['name'=>'MONTENEGRO'                      ,'code'=>'382'   ],
        ['name'=>'SAINT MARTIN'                    ,'code'=>'1599'  ],
        ['name'=>'MADAGASCAR'                      ,'code'=>'261'   ],
        ['name'=>'MARSHALL ISLANDS'                ,'code'=>'692'   ],
        ['name'=>'North Macedonia'                 ,'code'=>'389'   ],
        ['name'=>'MALI'                            ,'code'=>'223'   ],
        ['name'=>'MYANMAR'                         ,'code'=>'95'    ],
        ['name'=>'MONGOLIA'                        ,'code'=>'976'   ],
        ['name'=>'MACAU'                           ,'code'=>'853'   ],
        ['name'=>'NORTHERN MARIANA ISLANDS'        ,'code'=>'1670'  ],
        ['name'=>'MAURITANIA'                      ,'code'=>'222'   ],
        ['name'=>'MONTSERRAT'                      ,'code'=>'1664'  ],
        ['name'=>'MALTA'                           ,'code'=>'356'   ],
        ['name'=>'MAURITIUS'                       ,'code'=>'230'   ],
        ['name'=>'MALDIVES'                        ,'code'=>'960'   ],
        ['name'=>'MALAWI'                          ,'code'=>'265'   ],
        ['name'=>'MEXICO'                          ,'code'=>'52'    ],
        ['name'=>'MALAYSIA'                        ,'code'=>'60'    ],
        ['name'=>'MOZAMBIQUE'                      ,'code'=>'258'   ],
        ['name'=>'NAMIBIA'                         ,'code'=>'264'   ],
        ['name'=>'NEW CALEDONIA'                   ,'code'=>'687'   ],
        ['name'=>'NIGER'                           ,'code'=>'227'   ],
        ['name'=>'NIGERIA'                         ,'code'=>'234'   ],
        ['name'=>'NICARAGUA'                       ,'code'=>'505'   ],
        ['name'=>'NETHERLANDS'                     ,'code'=>'31'    ],
        ['name'=>'NORWAY'                          ,'code'=>'47'    ],
        ['name'=>'NEPAL'                           ,'code'=>'977'   ],
        ['name'=>'NAURU'                           ,'code'=>'674'   ],
        ['name'=>'NIUE'                            ,'code'=>'683'   ],
        ['name'=>'NEW ZEALAND'                     ,'code'=>'64'    ],
        ['name'=>'OMAN'                            ,'code'=>'968'   ],
        ['name'=>'PANAMA'                          ,'code'=>'507'   ],
        ['name'=>'PERU'                            ,'code'=>'51'    ],
        ['name'=>'FRENCH POLYNESIA'                ,'code'=>'689'   ],
        ['name'=>'PAPUA NEW GUINEA'                ,'code'=>'675'   ],
        ['name'=>'PHILIPPINES'                     ,'code'=>'63'    ],
        ['name'=>'PAKISTAN'                        ,'code'=>'92'    ],
        ['name'=>'POLAND'                          ,'code'=>'48'    ],
        ['name'=>'SAINT PIERRE AND MIQUELON'       ,'code'=>'508'   ],
        ['name'=>'PITCAIRN'                        ,'code'=>'870'   ],
        ['name'=>'PUERTO RICO'                     ,'code'=>'1'     ],
        ['name'=>'PORTUGAL'                        ,'code'=>'351'   ],
        ['name'=>'PALAU'                           ,'code'=>'680'   ],
        ['name'=>'PARAGUAY'                        ,'code'=>'595'   ],
        ['name'=>'QATAR'                           ,'code'=>'974'   ],
        ['name'=>'ROMANIA'                         ,'code'=>'40'    ],
        ['name'=>'SERBIA'                          ,'code'=>'381'   ],
        ['name'=>'RUSSIAN FEDERATION'              ,'code'=>'7'     ],
        ['name'=>'KAZAKSTAN'                       ,'code'=>'7'     ],
        ['name'=>'RWANDA'                          ,'code'=>'250'   ],
        ['name'=>'SAUDI ARABIA'                    ,'code'=>'966'   ],
        ['name'=>'SOLOMON ISLANDS'                 ,'code'=>'677'   ],
        ['name'=>'SEYCHELLES'                      ,'code'=>'248'   ],
        ['name'=>'SUDAN'                           ,'code'=>'249'   ],
        ['name'=>'SWEDEN'                          ,'code'=>'46'    ],
        ['name'=>'SINGAPORE'                       ,'code'=>'65'    ],
        ['name'=>'SAINT HELENA'                    ,'code'=>'290'   ],
        ['name'=>'SLOVENIA'                        ,'code'=>'386'   ],
        ['name'=>'SLOVAKIA'                        ,'code'=>'421'   ],
        ['name'=>'SIERRA LEONE'                    ,'code'=>'232'   ],
        ['name'=>'SAN MARINO'                      ,'code'=>'378'   ],
        ['name'=>'SENEGAL'                         ,'code'=>'221'   ],
        ['name'=>'SOMALIA'                         ,'code'=>'252'   ],
        ['name'=>'SURINAME'                        ,'code'=>'597'   ],
        ['name'=>'SAO TOME AND PRINCIPE'           ,'code'=>'239'   ],
        ['name'=>'EL SALVADOR'                     ,'code'=>'503'   ],
        ['name'=>'SYRIAN ARAB REPUBLIC'            ,'code'=>'963'   ],
        ['name'=>'SWAZILAND'                       ,'code'=>'268'   ],
        ['name'=>'TURKS AND CAICOS ISLANDS'        ,'code'=>'1649'  ],
        ['name'=>'CHAD'                            ,'code'=>'235'   ],
        ['name'=>'TOGO'                            ,'code'=>'228'   ],
        ['name'=>'THAILAND'                        ,'code'=>'66'    ],
        ['name'=>'TAJIKISTAN'                      ,'code'=>'992'   ],
        ['name'=>'TOKELAU'                         ,'code'=>'690'   ],
        ['name'=>'TIMOR-LESTE'                     ,'code'=>'670'   ],
        ['name'=>'TURKMENISTAN'                    ,'code'=>'993'   ],
        ['name'=>'TUNISIA'                         ,'code'=>'216'   ],
        ['name'=>'TONGA'                           ,'code'=>'676'   ],
        ['name'=>'TURKEY'                          ,'code'=>'90'    ],
        ['name'=>'TRINIDAD AND TOBAGO'             ,'code'=>'1868'  ],
        ['name'=>'TUVALU'                          ,'code'=>'688'   ],
        ['name'=>'TAIWAN, PROVINCE OF CHINA'       ,'code'=>'886'   ],
        ['name'=>'TANZANIA, UNITED REPUBLIC OF'    ,'code'=>'255'   ],
        ['name'=>'UKRAINE'                         ,'code'=>'380'   ],
        ['name'=>'UGANDA'                          ,'code'=>'256'   ],
        ['name'=>'UNITED STATES'                   ,'code'=>'1'     ],
        ['name'=>'CANADA'                          ,'code'=>'1'     ],
        ['name'=>'URUGUAY'                         ,'code'=>'598'   ],
        ['name'=>'UZBEKISTAN'                      ,'code'=>'998'   ],
        ['name'=>'HOLY SEE (VATICAN CITY STATE)'   ,'code'=>'39'    ],
        ['name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'  ],
        ['name'=>'VENEZUELA'                       ,'code'=>'58'    ],
        ['name'=>'VIRGIN ISLANDS, BRITISH'         ,'code'=>'1284'  ],
        ['name'=>'VIRGIN ISLANDS, U.S.'            ,'code'=>'1340'  ],
        ['name'=>'VIET NAM'                        ,'code'=>'84'    ],
        ['name'=>'VANUATU'                         ,'code'=>'678'   ],
        ['name'=>'WALLIS AND FUTUNA'               ,'code'=>'681'   ],
        ['name'=>'SAMOA'                           ,'code'=>'685'   ],
        ['name'=>'KOSOVO'                          ,'code'=>'381'   ],
        ['name'=>'YEMEN'                           ,'code'=>'967'   ],
        ['name'=>'MAYOTTE'                         ,'code'=>'262'   ],
        ['name'=>'SOUTH AFRICA'                    ,'code'=>'27'    ],
        ['name'=>'ZAMBIA'                          ,'code'=>'260'   ],
        ['name'=>'ZIMBABWE'                        ,'code'=>'263'   ],
    ];
}
