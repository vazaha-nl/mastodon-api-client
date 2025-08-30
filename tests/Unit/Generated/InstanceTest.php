<?php

/*
 * This file is auto generated! Do not edit!
 */

declare(strict_types=1);

namespace Tests\Unit\Generated;

use PHPUnit\Framework\TestCase;
use Vazaha\Mastodon\Models\InstanceModel;

class InstanceTest extends TestCase
{
    protected string $json;

    protected function setUp(): void
    {
        $this->json = <<<'JSON'
{
   "api_versions" : {
      "mastodon" : 6
   },
   "configuration" : {
      "accounts" : {
         "max_featured_tags" : 10,
         "max_pinned_statuses" : 5
      },
      "limited_federation" : false,
      "media_attachments" : {
         "description_limit" : 1500,
         "image_matrix_limit" : 33177600,
         "image_size_limit" : 16777216,
         "supported_mime_types" : [
            "image/jpeg",
            "image/png",
            "image/gif",
            "image/heic",
            "image/heif",
            "image/webp",
            "image/avif",
            "video/webm",
            "video/mp4",
            "video/quicktime",
            "video/ogg",
            "audio/wave",
            "audio/wav",
            "audio/x-wav",
            "audio/x-pn-wave",
            "audio/vnd.wave",
            "audio/ogg",
            "audio/vorbis",
            "audio/mpeg",
            "audio/mp3",
            "audio/webm",
            "audio/flac",
            "audio/aac",
            "audio/m4a",
            "audio/x-m4a",
            "audio/mp4",
            "audio/3gpp",
            "video/x-ms-asf"
         ],
         "video_frame_rate_limit" : 120,
         "video_matrix_limit" : 8294400,
         "video_size_limit" : 103809024
      },
      "polls" : {
         "max_characters_per_option" : 50,
         "max_expiration" : 2629746,
         "max_options" : 4,
         "min_expiration" : 300
      },
      "statuses" : {
         "characters_reserved_per_url" : 23,
         "max_characters" : 500,
         "max_media_attachments" : 4
      },
      "translation" : {
         "enabled" : true
      },
      "urls" : {
         "terms_of_service" : null
      },
      "vapid" : {
         "public_key" : "BCk-QqERU0q-CfYZjcuB6lnyyOYfJ2AifKqfeGIm7Z-HiTU5T9eTG5GxVA0_OH5mMlI4UkkDTpaZwozy0TzdZ2M="
      }
   },
   "contact" : {
      "account" : {
         "acct" : "Mastodon",
         "bot" : false,
         "created_at" : "2016-11-23T00:00:00.000Z",
         "discoverable" : true,
         "display_name" : "Mastodon",
         "emojis" : [],
         "fields" : [
            {
               "name" : "Homepage",
               "verified_at" : "2018-10-31T04:11:00.076+00:00"
            },
            {
               "name" : "Patreon",
               "verified_at" : null
            },
            {
               "name" : "GitHub",
               "verified_at" : "2023-07-21T13:27:45.996+00:00"
            }
         ],
         "followers_count" : 843930,
         "following_count" : 34,
         "group" : false,
         "hide_collections" : false,
         "id" : "13179",
         "indexable" : false,
         "last_status_at" : "2025-07-10",
         "locked" : false,
         "noindex" : false,
         "note" : "<p>Free, open-source decentralized social media platform.</p>",
         "roles" : [],
         "statuses_count" : 344,
         "username" : "Mastodon"
      },
      "email" : "staff@mastodon.social"
   },
   "description" : "The original server operated by the Mastodon gGmbH non-profit",
   "domain" : "mastodon.social",
   "icon" : [
      {
         "size" : "36x36"
      },
      {
         "size" : "48x48"
      },
      {
         "size" : "72x72"
      },
      {
         "size" : "96x96"
      },
      {
         "size" : "144x144"
      },
      {
         "size" : "192x192"
      },
      {
         "size" : "256x256"
      },
      {
         "size" : "384x384"
      },
      {
         "size" : "512x512"
      }
   ],
   "languages" : [
      "en"
   ],
   "registrations" : {
      "approval_required" : false,
      "enabled" : true,
      "message" : null,
      "min_age" : 16,
      "reason_required" : false,
      "url" : null
   },
   "rules" : [
      {
         "hint" : "This includes content that is particularly provocative even if it may not show specific body parts, as well as dead bodies, bloody injuries, and other gore. Particularly obscene content may be prohibited entirely. Profile pictures and header images may not contain sexually explicit or violent media.",
         "id" : "1",
         "text" : "Sexually explicit or violent media must be marked as sensitive or with a content warning",
         "translations" : {
            "de" : {
               "hint" : "Das beinhaltet ausdrücklich provokative Inhalte, auch wenn keine bestimmten Körperteile zu sehen sind, sowie Leichname, blutige Verletzungen und vergleichbare extreme Darstellungen. Besonders obszöne Inhalte können vollständig verboten werden. Profil- und Titelbilder dürfen keine sexuell expliziten oder Gewaltdarstellungen abbilden.",
               "text" : "Sexuell explizite Darstellungen oder solche von Gewalt müssen mit einer Inhaltswarnung versehen werden."
            },
            "es" : {
               "hint" : "Esto incluye contenido especialmente provocativo, aunque no muestre partes específicas del cuerpo, así como cadáveres, heridas sangrientas y otras escenas sangrientas. Los contenidos especialmente obscenos pueden prohibirse por completo. Las fotos de perfil y las imágenes de cabecera no pueden contener contenido sexual explícito o violento.",
               "text" : "El contenido sexual explícito o violento debe marcarse como sensible o con una advertencia de contenido."
            },
            "fr" : {
               "hint" : "Cela inclut le contenu particulièrement provocateur même s’il ne montre pas particulièrement de parties intimes, ainsi que les photos de cadavres, de blessures sanglantes et autres scènes dérangeantes. Le contenu particulièrement obscène peut être complètement interdit. Les images de profil et d’en-tête ne doivent pas contenir de contenu sexuellement explicite ou violent.",
               "text" : "Le contenu érotique, pornographique ou violent doit être marqué comme sensible ou avoir un avertissement de contenu."
            },
            "nl" : {
               "hint" : "Dit omvat ook inhoud die gedeeltelijk aanstootgevend is zelfs als het geen lichaamsdelen toont, en ook dode lichamen, bloederige verwondingen en andere gruwelijkheden. Zeer obscene inhoud kan helemaal verboden worden. Profielfoto’s en headerafbeeldingen mogen geen seksueel expliciete of geweldadige inhoud hebben.",
               "text" : "Seksueel expliciet of gewelddadig beeldmateriaal moet als ‘gevoelig’ gemarkeerd worden, of met een inhoudswaarschuwing gemarkeerd."
            },
            "ru" : {
               "hint" : "Это включает в себя особенно провоцирующий контент, даже если он не показывает определённые части тела, а также мёртвые тела, окровавленные раны и прочую кровь. Особенно жестокий контент может быть запрещён полностью. Аватары и обложки профилей не должны содержать сексуально откровенные или жестокие изображения.",
               "text" : "Сексуально откровенные или жестокие изображения или видео должны быть помечены как чувствительные или скрыты под спойлер."
            },
            "zh-CN" : {
               "hint" : "这包括特别挑逗性的内容，即使它可能没有显示特定的身体部位，以及尸体、血腥伤害和其他血腥内容。特别淫秽的内容可能会被完全禁止。个人资料图片和头像不得包含色情或暴力内容。",
               "text" : "色情或暴力媒体必须标记为敏感或有内容警告"
            },
            "zh-TW" : {
               "hint" : "這包括特別挑釁的內容，即使它可能沒有顯示特定的身體部位，以及屍體、血腥傷害和其他血腥內容。特別猥褻的內容可能會被完全禁止。個人檔案圖片和標題圖片不得包含色情或暴力媒體。",
               "text" : "性暗示或暴力媒體必須標示為敏感或附帶內容警示"
            }
         }
      },
      {
         "hint" : "Transphobic behavior such as intentional misgendering and deadnaming is strictly prohibited. Promotion of \"conversion therapy\" is strictly prohibited. Criticism of governments and religions is permissible unless being used as a proxy for discrimination.",
         "id" : "2",
         "text" : "No racism, sexism, homophobia, transphobia, ableism, xenophobia, or casteism.",
         "translations" : {
            "de" : {
               "hint" : "Transphobes Verhalten wie die absichtliche Verwendung von falschen Anreden und Pronomen sowie Deadnaming ist strengstens verboten. Die Werbung für Konversionstherapien ist strengstens verboten. Die Kritik an Regierungen und Religionen ist zulässig, sofern sie nicht stellvertretend für Diskriminierung verwendet wird.",
               "text" : "Kein(e) Rassismus, Sexismus, Homophobie, Transphobie, Behindertenfeindlichkeit, Fremdenfeindlichkeit oder Kasteismus."
            },
            "es" : {
               "hint" : "Queda terminantemente prohibido el comportamiento transfóbico, como el uso intencionado de nombres falsos o el \"deadnaming\". La promoción de la \"terapia de conversión\" está estrictamente prohibida. Se permiten las críticas a gobiernos y religiones, a menos que se utilicen como excusa para la discriminación.",
               "text" : "Prohibido el racismo, sexismo, homofobia, transfobia, ableísmo, xenofobia o casticismo."
            },
            "fr" : {
               "hint" : "Les comportements intentionnellement transphobes, comme le mégenrage ou le morinommage (“deadnaming”) est strictement interdit. La promotion des “thérapies de conversion” est strictement interdite. La critique des gouvernements et religions est autorisée, sauf dans les cas ou elle est utilisée comme paravent pour de la discrimination.",
               "text" : "Pas de racisme, sexisme, homophobie, transphobie, validisme, xénophobie ou discrimination de caste."
            },
            "nl" : {
               "hint" : "Transfobisch gedrag zoals opzettelijk misgenderen en deadnaming is ten strengste verboden. Het promoten van “conversie therapie” is ten strengste verboden. Kritiek op overheden en religies is toegestaan tenzij het wordt gebruikt als proxy voor racisme.",
               "text" : "Geen racisme, seksisme, homofobie, transfobie, validisme, xenofobie of kastendiscriminatie."
            },
            "ru" : {
               "hint" : "Трансфобное поведение, такое как осознанный мисгендеринг и деднейминг, строго запрещено. Продвижение \"конверсионной терапии\" строго запрещено. Критика правительств и религий разрешена, кроме случаев, когда она используется как оправдание для дискриминации.",
               "text" : "Запрещается расизм, сексизм, гомофобия, трансфобия, эйблизм, ксенофобия и кастовость."
            },
            "zh-CN" : {
               "hint" : "严禁变性仇视行为，如故意误用性别和死名。严禁宣传 “转换疗法”。允许批评政府和宗教，除非被用作歧视的代名词。",
               "text" : "禁止种族主义、性别歧视、仇视同性恋、仇视变性者、异能者、仇外心理或种姓歧视。"
            },
            "zh-TW" : {
               "hint" : "嚴禁變性仇視行為，例如故意誤用性別和暱稱。嚴禁宣傳「扭轉治療」。允許批評政府和宗教，除非被用來代表歧視。",
               "text" : "禁止種族主義、性別主義、恐同主義、恐變性主義、能力主義、仇外主義或種性主義。"
            }
         }
      },
      {
         "hint" : "Calling for people or groups to be assassinated, murdered, or attacked physically is strictly prohibited. Support for violent groups or events is prohibited.",
         "id" : "3",
         "text" : "No incitement of violence or promotion of violent ideologies",
         "translations" : {
            "de" : {
               "hint" : "Der Aufruf zum Mord oder körperlichen Attacken auf Personen oder Gruppen ist strengstens verboten. Die Unterstützung gewalttätiger Gruppen oder Veranstaltungen ist verboten.",
               "text" : "Keine Anstiftung zu Gewalt oder Förderung gewalttätiger Ideologien."
            },
            "es" : {
               "hint" : "Está estrictamente prohibido hacer llamamientos para que se asesine, mate o agreda físicamente a personas o grupos. Está prohibido apoyar a grupos o acontecimientos violentos.",
               "text" : "Prohibida la incitación a la violencia o la promoción de ideologías violentas."
            },
            "fr" : {
               "hint" : "L’appel au meutre, à la violence ou à l’action physique envers des personnes ou des groupes de personnes est strictement interdit. Le soutien à des groupes ou évènements violents est interdit.",
               "text" : "Pas d’incitation à la violence ou de promotion d’idéologies violentes."
            },
            "nl" : {
               "hint" : "Mensen of groepen aanzetten tot moord, aanslagen of fysieke aanvallen is ten strengste verboden. Steun voor gewelddadige groeperingen of evenementen is verboden.",
               "text" : "Niet aanzetten tot geweld of verspreiden van gewelddadige ideologieën."
            },
            "ru" : {
               "hint" : "Призывы к покушениям, убийствам и физическим атакам на людей или группы людей строго запрещены. Поддержка жестоких сообществ или событий запрещена.",
               "text" : "Запрещается подстрекательство к жестокости или продвижение жестоких идеологий."
            },
            "zh-CN" : {
               "hint" : "严禁呼吁暗杀、谋杀或人身攻击他人或团体。禁止支持暴力团体或事件。",
               "text" : "不得煽动暴力或宣扬暴力意识形态"
            },
            "zh-TW" : {
               "hint" : "嚴禁呼籲暗殺、謀殺或人身攻擊他人或團體。嚴禁支持暴力團體或事件。",
               "text" : "嚴禁煽動暴力或宣揚暴力意識形態"
            }
         }
      },
      {
         "hint" : "Repeat attempts to communicate with users who have blocked you or creation of accounts solely to harass or insult individuals is strictly prohibited. Coordinated activity to attack other users is prohibited. Posting of private personal information about others is prohibited.",
         "id" : "4",
         "text" : "No harassment, block evasion, dogpiling, or doxxing of others",
         "translations" : {
            "de" : {
               "hint" : "Wiederholte Kommunikationsversuche mit Profilen, die dich blockiert haben, oder die Erstellung neuer Konten, die ausschließlich dazu dienen, andere zu belästigen oder zu beleidigen, sind strengstens verboten. Koordinierte Angriffe auf andere Profile sind verboten. Die Veröffentlichung von privaten und persönlichen Informationen anderer ist verboten.",
               "text" : "Keine Belästigungen, Umgehung von Blockierungen, Dogpiling oder Doxxing."
            },
            "es" : {
               "hint" : "Está estrictamente prohibido intentar comunicarse repetidamente con usuarios que te hayan bloqueado o crear cuentas con el único fin de acosar o insultar a otras personas. Queda prohibida la actividad coordinada para atacar a otros usuarios. Está prohibido publicar información personal privada sobre otras personas.",
               "text" : "No acosar, evadir bloqueos, \"dogpiling\" (abuso en línea por grupos de acosadores) o doxeo de otros."
            },
            "fr" : {
               "hint" : "Les tentatives répétées de communiquer avec des utilisateur·ices qui vont ont bloqué ainsi que la création de comptes pour harceler ou insulter autrui sont strictement interdites. Les attaques coordonnées contre autrui sont interdites. La publication de données personnelles d’autrui est interdite.",
               "text" : "Pas de harcèlement, d’esquive de blocage, de “dogpiling”, ou de divulgation de données personnelles d’autrui."
            },
            "nl" : {
               "hint" : "Herhaalde pogingen tot communiceren met gebruikers die je hebben geblokkeerd, of het maken van accounts enkel om personen te intimideren of beledigen is ten strengste verboden. Gecoördineerde activiteit om andere gebruikers aan te vallen is verboden. Het plaatsen van privé-gegevens van anderen is verboden.",
               "text" : "Geen intimidatie, omzeilen van blokkades, groepsaanvallen of het verspreiden van privégegevens van anderen."
            },
            "ru" : {
               "hint" : "Повторяющиеся попытки взаимодействовать с пользователями, которые вас заблокировали, и создание учётных записей исключительно ради травли или оскорблений, строго запрещены. Скоординированная активность с целью атаки на других пользователей запрещена. Публикация личной информации других лиц запрещена.",
               "text" : "Запрещается травля, избегание блокировок, набеги и разглашение личной информации других лиц."
            },
            "zh-CN" : {
               "hint" : "严禁重复尝试与已封禁您的用户交流，或仅为骚扰或侮辱他人而创建账户。严禁协同攻击其他用户。禁止发布他人的私人个人信息。",
               "text" : "不得骚扰、回避封禁、诽谤或攻击他人"
            },
            "zh-TW" : {
               "hint" : "嚴禁重複嘗試與已封鎖您的使用者溝通，或純粹為了騷擾或侮辱他人而建立帳號。禁止攻擊其他使用者的協調活動。禁止張貼他人的私人個人資訊。",
               "text" : "嚴禁騷擾、迴避封鎖、煽動或誣衊他人"
            }
         }
      },
      {
         "hint" : "False and misleading information and links from low-quality sources may not be posted, especially if they are likely to mislead or confuse others or endanger their safety.",
         "id" : "7",
         "text" : "Do not share information widely-known to be false and misleading",
         "translations" : {
            "de" : {
               "hint" : "Falsche und irreführende Informationen sowie Links aus unseriösen Quellen dürfen nicht gepostet werden, insbesondere wenn sie geeignet sind, andere in die Irre zu führen oder deren Sicherheit zu gefährden.",
               "text" : "Verbreitet keine Informationen, von denen allgemein bekannt ist, dass sie falsch oder irreführend."
            },
            "es" : {
               "hint" : "No está permitido publicar información falsa y engañosa ni enlaces de fuentes de baja calidad, especialmente si pueden inducir a error o confusión a otras personas o poner en peligro su seguridad.",
               "text" : "No compartas información ampliamente conocida por ser falsa y engañosa."
            },
            "fr" : {
               "hint" : "Les informations fausses ou trompeuses, ainsi que les liens vers des sources de mauvaise qualité ne doivent pas être publiées, particulièrement si elles risquent de tromper, d’induire en erreur, de semer la confusion ou de mettre des personnes en danger.",
               "text" : "Ne partagez pas d’informations connues pour être fausses ou trompeuses."
            },
            "nl" : {
               "hint" : "Onjuiste en misleidende informatie en links naar onbetrouwbare bronnen mogen niet geplaatst worden, zeker als deze waarschijnlijk anderen misleiden of verwarren, of hun veiligheid in  gevaar brengt.",
               "text" : "Deel geen informatie die algemeen bekend staat als onjuist en misleidend."
            },
            "ru" : {
               "hint" : "Запрещена публикация ложной и вводящей в заблуждение информации и ссылок из низкокачественных источников, особенно если это может сбить других людей с толку, запутать их, или подвергнуть их опасности.",
               "text" : "Не публикуйте заведомо ложную и вводящую в заблуждение информацию."
            },
            "zh-CN" : {
               "hint" : "不得发布虚假和误导性信息以及来自低质量来源的链接，尤其是可能误导或混淆他人或危及他人安全的信息。",
               "text" : "不得分享众所周知的虚假和误导性信息\r\n"
            },
            "zh-TW" : {
               "hint" : "不得張貼虛假和誤導資訊以及來自低品質來源的連結，尤其是可能誤導或混淆他人或危害他人安全的資訊。",
               "text" : "請勿分享廣為人知的虛假和誤導資訊"
            }
         }
      },
      {
         "hint" : "Content created by others must clearly provide a reference to the author, creator, or source. For adult content, this should include performers. Accounts may not solely post AI-generated content.",
         "id" : "1008",
         "text" : "Content created by others must be attributed, and use of generative AI must be disclosed",
         "translations" : {
            "de" : {
               "hint" : "Von anderen erstellte Inhalte müssen durch einen eindeutigen Verweis auf den/die Autor*in oder die Quelle gekennzeichnet werden. Bei nicht jugendfreien Inhalten sollte dies auch die Darsteller*innen einschließen. Konten dürfen nicht ausschließlich KI-generierte Inhalte posten.",
               "text" : "Von anderen erstellte Inhalte müssen gekennzeichnet und die Nutzung generativer KI offengelegt werden."
            },
            "es" : {
               "hint" : "Los contenidos creados por terceros deben proporcionar claramente una referencia al autor, creador o fuente. En el caso de los contenidos para adultos, debe incluirse a los artistas. Las cuentas no pueden publicar únicamente contenidos generados por IA.",
               "text" : "Los contenidos creados por terceros deben ser atribuidos y el uso de IA debe ser revelado."
            },
            "fr" : {
               "hint" : "Le contenu créé par autrui doit fournir une référence explicite à son auteur·ice, créateur·ice ou sa source. Cela inclut les acteur·ice de contenu pour adulte. Les comptes publiant exclusivement du contenu généré par IA sont interdits.",
               "text" : "Le contenu crée par autrui doit être attribué, et l’utilisation d’IA générative doit être marqué comme tel."
            },
            "nl" : {
               "hint" : "Inhoud gemaakt door anderen moet een duidelijke referentie naar de auteur, maker of bron bevatten. Voor Content created by others must clearly provide a reference to the author, creator, or source. Voor inhoud voor volwassenen, moet het model worden vermeld. Accounts mogen niet uitsluitend door AI gegenereerde inhoud plaatsen.",
               "text" : "Inhoud gemaakt door anderen moet worden toegeschreven, en het gebruik van generatieve AI moet worden aangegeven."
            },
            "ru" : {
               "hint" : "Контент, созданный другими, должен явным образом сопровождаться отсылкой к автору, создателю или источнику. Для контента для взрослых это включает в себя актёров. Учётные записи не могут публиковать исключительно контент, сгенерированный с помощью ИИ.",
               "text" : "Контент, созданный другими, должен публиковаться с указанием авторства, а использование генеративного ИИ должно быть раскрыто."
            },
            "zh-CN" : {
               "hint" : "他人创建的内容必须明确注明作者、创建者或来源。对于成人内容，应包括表演者。账户不得仅发布人工智能生成的内容。",
               "text" : "他人创建的内容必须注明出处，使用人工智能产生的内容必须公开和披露说明"
            },
            "zh-TW" : {
               "hint" : "他人創作的內容必須清楚提供作者、創作人或來源的參照。對於成人內容，這應該包括表演者。帳戶不得僅發佈人工智能產生的內容。",
               "text" : "由他人創作的內容必須註明來源，使用人工智能產生的內容必須公開和披露說明"
            }
         }
      }
   ],
   "thumbnail" : {
      "blurhash" : "UeKUpFxuo~R%0nW;WCnhF6RjaJt757oJodS$",
      "versions" : {}
   },
   "title" : "Mastodon",
   "usage" : {
      "users" : {
         "active_month" : 279347
      }
   },
   "version" : "4.5.0-nightly.2025-07-11"
}

JSON;
    }

    public function testModelInstantation(): void
    {
        $array = json_decode($this->json, true);

        if (!is_array($array)) {
            return;
        }

        if (array_is_list($array)) {
            $array = $array[0] ?? [];
        }

        $model = InstanceModel::fromArray($array);

        $modelArray = $model->toArray();

        foreach ($array as $property => $value) {
            $property = InstanceModel::sanitizePropertyName($property);

            self::assertObjectHasProperty($property, $model);

            $modelValue = $model->{$property};

            if (!is_string($modelValue) && !is_int($modelValue)) {
                // TODO find some other way to test this
                continue;
            }

            self::assertEquals($value, $model->{$property});
        }
    }
}
