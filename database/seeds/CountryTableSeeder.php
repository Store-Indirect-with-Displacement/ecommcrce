<?php

use Illuminate\Database\Seeder;
use App\conutry;

class CountryTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $mCountriesNames = [
            "Ascension Island",
            "Andorra",
            "United Arab Emirates",
            "Afghanistan",
            "Antigua & Barbuda",
            "Anguilla",
            "Albania",
            "Armenia",
            "Angola",
            "Antarctica",
            "Argentina",
            "American Samoa",
            "Austria",
            "Australia",
            "Aruba",
            "Islands",
            "Azerbaijan",
            "Bosnia & Herzegovina",
            "Barbados",
            "Bangladesh",
            "Belgium",
            "Burkina Faso",
            "Bulgaria",
            "Bahrain",
            "Burundi",
            "Benin",
            "St. Barthélemy",
            "Bermuda",
            "Brunei",
            "Bolivia",
            "Caribbean Netherlands",
            "Brazil",
            "Bahamas",
            "Bhutan",
            "Bouvet Island",
            "Botswana",
            "Belarus",
            "Belize",
            "Canada",
            "Cocos  Islands",
            "Congo - Kinshasa",
            "Central African Republic",
            "Congo - Brazzaville",
            "Switzerland",
            "Côte d’Ivoire",
            "Cook Islands",
            "Chile",
            "Cameroon",
            "China",
            "Colombia",
            "Clipperton Island",
            "Costa Rica",
            "Cuba",
            "Cape Verde",
            "Curaçao",
            "Christmas Island",
            "Cyprus",
            "Czechia",
            "Germany",
            "Diego Garcia",
            "Djibouti",
            "Denmark",
            "Dominica",
            "Dominican Republic",
            "Algeria",
            "Ceuta & Melilla",
            "Ecuador",
            "Estonia",
            "Egypt",
            "Wester n Sahara",
            "Eritrea",
            "Spain",
            "Ethiopia",
            "EuropeanUnion",
            "Finland",
            "Fiji",
            "Falkland Islands",
            "Micronesia",
            "Faroe Islands",
            "France",
            "Gabon",
            "United Kingdom",
            "Grenada",
            "Georgia",
            "French Guiana",
            "Guernsey",
            "Ghana",
            "Gibraltar",
            "Greenland",
            "Gambia",
            "Guinea",
            "Guadeloupe",
            "Equatorial Guinea",
            "Greece",
            "South Georgia & South Sandwich Islands",
            "Guatemala",
            "Guam",
            "Guinea-Biss,au",
            "Guyana",
            "Hong Kong SAR China",
            "Heard & McDonald Islands",
            "Honduras",
            "Croatia",
            "Haiti",
            "Hungary",
            "Canary Islands",
            "Indonesia",
            "Ireland",
            "Isleof Manv",
            "Indiav",
            "British Indian Ocean Territory",
            "Iraq",
            "Iran",
            "Iceland",
            "Italy",
            "Jersey",
            "Jamaica",
            "Jordan",
            "Japan",
            "Kenya",
            "Kyrgyzstan",
            "Cambodia",
            "Kiribati",
            "Comoros",
            "St. Kitts & Nevis",
            "North Korea",
            "South Korea",
            "Kuwait",
            "Cayman Islands",
            "Kazakhstan",
            "Laos",
            "Lebanon",
            "St. Lucia",
            "Liechtenstein",
            "Sri Lanka",
            "Liberia",
            "Lesotho",
            "Lithuania",
            "Luxembourg",
            "Latvia",
            "Libya",
            "Morocco",
            "Monaco",
            "Moldova",
            "Montenegro",
            "St. Martin",
            "Madagascar",
            "Marshall Islands",
            "North Macedonia",
            "Myanmar (Burma)",
            "Mongolia",
            "Macao Sar China",
            "Northern Mariana Islands",
            "Martinique",
            "Mauritania",
            "Montserrat",
            "Malta",
            "Mauritius",
            "Maldives",
            "Malawi",
            "Mexico",
            "Malaysia",
            "Mozambique",
            "Namibia",
            "New Caledonia",
            "Niger",
            "Norfolk Island",
            "Nigeria",
            "Nicaragua",
            "Netherlands",
            "Norway",
            "Nepal",
            "Nauru",
            "Niue",
            "New Zealand",
            "Oman",
            "Panama",
            "Peru",
            "French Polynesia",
            "Papua New Guinea",
            "Philippines",
            "Pakistan",
            "Poland",
            "St. Pierre & Miquelon",
            "Pitcairn Islands",
            "Puerto Rico",
            "Palestinian Territories",
            "Portugal",
            "Palau",
            "Paraguay",
            "Qatar",
            "Réunion",
            "Romania",
            "Serbia",
            "Russia",
            "Rwanda",
            "Saudi Arabia",
            "Solomon Islands",
            "Seychelles",
            "Sudan",
            "Sweden",
            "Singapore",
            "St. Helena",
            "Slovenia",
            "Svalbard & Jan Mayen",
            "Slovakia",
            "Sierra Leone",
            "San Marino",
            "Senegal",
            "Somalia",
            "Suriname",
            "South Sudan",
            "São Tomé & Príncipe",
            "El Salvador",
            "Sint Maarten",
            "Syria",
            "Eswatini",
            "Tristan Da Cunha",
            "Turks & Caicos Islands",
            "Chad",
            "French Southern Territories",
            "Togo",
            "Thailand",
            "Tajikistan",
            "Tokelau",
            "Timor-Leste",
            "Turkmenistan",
            "Tunisia",
            "Tonga",
            "Turkey",
            "Trinidad & Tobago",
            "Tuvalu",
            "Taiwan",
            "Tanzania",
            "Ukraine",
            "Uganda",
            "U.S. Outlying Islands",
            "United Nations",
            "United States",
            "Uruguay",
            "Uzbekistan",
            "Vatican City",
            "St. Vincent & Grenadines",
            "Venezuela",
            "British Virgin Islands",
            "U.S. Virgin Islands",
            "Vietnam",
            "Vanuatu",
            "Wallis & Futuna",
            "Samoa",
            "Kosovo",
            "Yemen",
            "Mayotte",
            "South Africa",
            "Zambia",
            "Zimbabwe"
        ];

        $mCountriesISO = [
            "🇦🇨",
            "🇦🇩",
            "🇦🇪",
            "🇦🇫",
            "🇦🇬",
            "🇦🇮",
            "🇦🇱",
            "🇦🇲",
            "🇦🇴",
            "🇦🇶",
            "🇦🇷",
            "🇦🇸",
            "🇦🇹",
            "🇦🇺",
            "🇦🇼",
            "🇦🇽",
            "🇦🇿",
            "🇧🇦",
            "🇧🇧",
            "🇧🇩",
            "🇧🇪",
            "🇧🇫",
            "🇧🇬",
            "🇧🇭",
            "🇧🇮",
            "🇧🇯",
            "🇧🇱",
            "🇧🇲",
            "🇧🇳",
            "🇧🇴",
            "🇧🇶",
            "🇧🇷",
            "🇧🇸",
            "🇧🇹",
            "🇧🇻",
            "🇧🇼",
            "🇧🇾",
            "🇧🇿",
            "🇨🇦",
            "🇨🇨",
            "🇨🇩",
            "🇨🇫",
            "🇨🇬",
            "🇨🇭",
            "🇨🇮",
            "🇨🇰",
            "🇨🇱",
            "🇨🇲",
            "🇨🇳",
            "🇨🇴",
            "🇨🇵",
            "🇨🇷",
            "🇨🇺",
            "🇨🇻",
            "🇨🇼",
            "🇨🇽",
            "🇨🇾",
            "🇨🇿",
            "🇩🇪",
            "🇩🇬",
            "🇩🇯",
            "🇩🇰",
            "🇩🇲",
            "🇩🇴",
            "🇩🇿",
            "🇪🇦",
            "🇪🇨",
            "🇪🇪",
            "🇪🇬",
            "🇪🇭",
            "🇪🇷",
            "🇪🇸",
            "🇪🇹",
            "🇪🇺",
            "🇫🇮",
            "🇫🇯",
            "🇫🇰",
            "🇫🇲",
            "🇫🇴",
            "🇫🇷",
            "🇬🇦",
            "🇬🇧",
            "🇬🇩",
            "🇬🇪",
            "🇬🇫",
            "🇬🇬",
            "🇬🇭",
            "🇬🇮",
            "🇬🇱 ",
            "🇬🇲 ",
            "🇬🇳 ",
            "🇬🇵 ",
            "🇬🇶 ",
            "🇬🇷 ",
            "🇬🇸 ",
            "🇬🇹 ",
            "🇬🇺 ",
            "🇬🇼 ",
            "🇬🇾",
            "🇭🇰 ",
            "🇭🇲 ",
            "🇭🇳 ",
            "🇭🇷 ",
            "🇭🇹 ",
            "🇭🇺 ",
            "🇮🇨 ",
            "🇮🇩 ",
            "🇮🇪 ",
            "🇮🇲 ",
            "🇮🇳 ",
            "🇮🇴 ",
            "🇮🇶 ",
            "🇮🇷 ",
            "🇮🇸 ",
            "🇮🇹 ",
            "🇯🇪 ",
            "🇯🇲 ",
            "🇯🇴 ",
            "🇯🇵 ",
            "🇰🇪 ",
            "🇰🇬 ",
            "🇰🇭",
            "🇰🇮 ",
            "🇰🇲",
            "🇰🇳 ",
            "🇰🇵 ",
            "🇰🇷 ",
            "🇰🇼 ",
            "🇰🇾 ",
            "🇰🇿 ",
            "🇱🇦 ",
            "🇱🇧 ",
            "🇱🇨",
            "🇱🇮",
            "🇱🇰",
            "🇱🇷",
            "🇱🇸",
            "🇱🇹",
            "🇱🇺",
            "🇱🇻",
            "🇱🇾",
            "🇲🇦",
            "🇲🇨",
            "🇲🇩",
            "🇲🇪",
            "🇲🇫",
            "🇲🇬",
            "🇲🇭",
            "🇲🇰",
            "🇲🇱",
            "🇲🇲",
            "🇲🇳",
            "🇲🇴",
            "🇲🇵",
            "🇲🇶",
            "🇲🇷",
            "🇲🇸",
            "🇲🇹",
            "🇲🇺",
            "🇲🇻",
            "🇲🇼",
            "🇲🇽",
            "🇲🇾",
            "🇲🇿",
            "🇳🇦",
            "🇳🇨",
            "🇳🇪",
            "🇳🇫",
            "🇳🇬",
            "🇳🇮",
            "🇳🇱",
            "🇳🇴",
            "🇳🇵",
            "🇳🇷",
            "🇳🇺",
            "🇳🇿",
            "🇴🇲",
            "🇵🇦",
            "🇵🇪",
            "🇵🇫",
            "🇵🇬",
            "🇵🇭",
            "🇵🇰",
            "🇵🇱",
            "🇵🇲",
            "🇵🇳",
            "🇵🇷",
            "🇵🇸",
            "🇵🇹",
            "🇵🇼",
            "🇵🇾",
            "🇶🇦",
            "\uD83C\uDDF7\uD83C\uDDEA",
            "🇷🇴",
            "🇷🇸",
            "🇷🇺",
            "🇷🇼",
            "🇸🇦",
            "🇸🇧",
            "🇸🇨",
            "🇸🇩",
            "🇸🇪",
            "🇸🇬",
            "🇸🇭",
            "🇸🇮",
            "🇸🇯",
            "🇸🇰",
            "🇸🇱",
            "🇸🇲",
            "🇸🇳",
            "🇸🇴",
            "🇸🇷",
            "🇸🇸",
            "🇸🇹",
            "🇸🇻",
            "🇸🇽",
            "🇸🇾",
            "🇸🇿",
            "🇹🇦",
            "🇹🇨",
            "🇹🇩",
            "🇹🇫",
            "🇹🇬",
            "🇹🇭",
            "🇹🇯",
            "🇹🇰",
            "🇹🇱",
            "🇹🇲",
            "🇹🇳",
            "🇹🇴",
            "🇹🇷",
            "🇹🇹",
            "🇹🇻",
            "🇹🇼",
            "🇹🇿",
            "🇺🇦",
            "🇺🇬",
            "🇺🇲",
            "🇺🇳",
            "🇺🇸",
            "🇺🇾",
            "🇺🇿",
            "🇻🇦",
            "🇻🇨",
            "🇻🇪",
            "🇻🇬",
            "🇻🇮",
            "🇻🇳",
            "🇻🇺",
            "🇼🇫",
            "🇼🇸",
            "🇽🇰",
            "🇾🇪",
            "🇾🇹",
            "🇿🇦",
            "🇿🇲",
            "🇿🇼",
        ];

        $mCountriesISOString = [
            "AC",
            "AD",
            "AE",
            "AF",
            "AG",
            "AI",
            "AL",
            "AM",
            "AO",
            "AQ",
            "AR",
            "AS",
            "AT",
            "AU",
            "AW",
            "AX",
            "AZ",
            "BA",
            "BB",
            "BD",
            "BE",
            "BF",
            "BG",
            "BH",
            "BI",
            "BJ",
            "BL",
            "BM",
            "BN",
            "BO",
            "BQ",
            "BR",
            "BS",
            "BT",
            "BV",
            "BW",
            "BY",
            "BZ",
            "CA",
            "CB",
            "CD",
            "CF",
            "CG",
            "CH",
            "CI",
            "CK",
            "CL",
            "CM",
            "CN",
            "CO",
            "CP",
            "CR",
            "CU",
            "CV",
            "CW",
            "CX",
            "CY",
            "CZ",
            "DE",
            "DG",
            "DJ",
            "DK",
            "DM",
            "DO",
            "DZ",
            "EA",
            "EC",
            "EE",
            "EG",
            "EH",
            "ER",
            "ES",
            "ET",
            "EU",
            "FI",
            "FJ",
            "FK",
            "FM",
            "FO",
            "FR",
            "GA",
            "GB",
            "GB",
            "GE",
            "GT",
            "GG",
            "GH",
            "GI",
            "GL ",
            "GM ",
            "GN ",
            "GP ",
            "GQ ",
            "GR ",
            "GS ",
            "GT ",
            "GU ",
            "GW ",
            "GY",
            "HK ",
            "HM ",
            "HN ",
            "HR ",
            "HT ",
            "HU ",
            "IC ",
            "ID ",
            "IE ",
            "IM ",
            "IN ",
            "IO",
            "IQ ",
            "IR ",
            "IS ",
            "IT ",
            "JE",
            "JM ",
            "JO ",
            "JP ",
            "KE ",
            "KG ",
            "KH",
            "KI",
            "KM",
            "KN ",
            "KP",
            "KR",
            "KW ",
            "KY",
            "KZ",
            "LA",
            "LB ",
            "LC",
            "LI",
            "LK",
            "LR",
            "LS",
            "LT",
            "LU",
            "LV",
            "LY",
            "MA",
            "MC",
            "MD",
            "ME",
            "MF",
            "MG",
            "MH",
            "MK",
            "ML",
            "MM",
            "MN",
            "MO",
            "MP",
            "MQ",
            "MR",
            "MS",
            "MT",
            "MU",
            "MV",
            "MW",
            "MX",
            "MY",
            "MZ",
            "NA",
            "NC",
            "NE",
            "NF",
            "NG",
            "NI",
            "NL",
            "NO",
            "NP",
            "NR",
            "NU",
            "NZ",
            "OM",
            "PA",
            "PE",
            "PF",
            "PG",
            "PH",
            "PK",
            "PL",
            "PM",
            "PN",
            "PR",
            "PS",
            "PT",
            "PW",
            "PY",
            "QA",
            "RE",
            "RO",
            "ES",
            "RU",
            "RW",
            "SA",
            "SB",
            "SC",
            "SD",
            "SE",
            "SG",
            "SH",
            "SI",
            "SJ",
            "SK",
            "SL",
            "SM",
            "SN",
            "SO",
            "SR",
            "SS",
            "ST",
            "SV",
            "SX",
            "SY",
            "SZ",
            "TA",
            "TC",
            "TD",
            "TF",
            "TG",
            "TH",
            "TJ",
            "TK",
            "TL",
            "TM",
            "TN",
            "TO",
            "TR",
            "TT",
            "TV",
            "TW",
            "TZ",
            "UA",
            "UG",
            "UM",
            "UN",
            "US",
            "UY",
            "UZ",
            "VA",
            "VC",
            "VE",
            "VG",
            "VI",
            "VN",
            "VU",
            "WF",
            "WS",
            "XK",
            "YE",
            "YT",
            "ZA",
            "ZM",
            "ZW",
        ];
        $mCodes = [
            247,
            376,
            971,
            93,
            1268,
            1264,
            355,
            374,
            244,
            672,
            54,
            1684,
            43,
            61,
            297,
            358,
            994,
            387,
            1246,
            880,
            32,
            226,
            359,
            973,
            257,
            229,
            590,
            1441,
            673,
            591,
            599,
            55,
            1242,
            975,
            47,
            267,
            375,
            501,
            1,
            61891,
            243,
            236,
            242,
            41,
            225,
            682,
            56,
            237,
            86,
            57,
            0,
            506,
            53,
            238,
            599,
            61,
            357,
            420,
            49,
            246,
            253,
            45,
            1767,
            1849,
            213,
            952,
            593,
            372,
            20,
            212,
            291,
            34,
            251,
            0,
            358,
            679,
            500,
            691,
            298,
            33,
            241,
            44,
            1473,
            995,
            594,
            44,
            233,
            350,
            299,
            220,
            224,
            590,
            240,
            30,
            0,
            502,
            1671,
            245,
            592,
            852,
            0,
            504,
            385,
            509,
            36,
            0,
            91,
            964,
            44,
            246,
            964,
            98,
            354,
            39,
            44,
            1876,
            962,
            81,
            254,
            996,
            855,
            1869,
            850,
            82,
            965,
            1345,
            7,
            856,
            961,
            1758,
            423,
            94,
            218,
            266,
            370,
            352,
            371,
            218,
            212,
            377,
            373,
            382,
            590,
            261,
            692,
            389,
            223,
            95,
            976,
            853,
            1670,
            596,
            222,
            1664,
            356,
            230,
            960,
            256,
            52,
            60,
            258,
            264,
            687,
            227,
            672,
            234,
            505,
            31,
            47,
            977,
            674,
            683,
            64,
            968,
            507,
            51,
            689,
            675,
            63,
            92,
            48,
            508,
            64,
            1993,
            970,
            351,
            680,
            595,
            974,
            262,
            40,
            381,
            7,
            250,
            966,
            677,
            248,
            249,
            46,
            65,
            290,
            386,
            47,
            421,
            232,
            378,
            221,
            252,
            597,
            211,
            239,
            503,
            1721,
            963,
            268,
            0,
            1,
            235,
            0,
            228,
            66,
            992,
            690,
            670,
            993,
            216,
            676,
            90,
            868,
            688,
            886,
            225,
            380,
            256,
            246,
            0,
            1,
            598,
            998,
            379,
            1784,
            58,
            1284,
            1340,
            84,
            678,
            681,
            685,
            383,
            967,
            262,
            27,
            260,
            263,
            0,
            0,
            0,
            0
        ];
        foreach ($mCountriesNames as $i=>$name) {
            $Name = $name;
            $ISO = $mCountriesISO[$i];
            $ISOString = $mCountriesISOString[$i];
            $code = $mCodes[$i];
            $country = new conutry;
            $country->country_name = $Name;
            $country->country_flage = $ISO;
            $country->country_iso = $ISOString;
            $country->country_code = $code;
            $country->save();
        }
    }

}