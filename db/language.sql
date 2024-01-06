CREATE TABLE language (
    id INT PRIMARY KEY AUTO_INCREMENT,
    identifier VARCHAR(255) UNIQUE NOT NULL,
    english TEXT NOT NULL,
    croatian TEXT NOT NULL,
    german TEXT NOT NULL,
    turkish TEXT NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


INSERT INTO language (identifier, english, croatian, german, turkish) VALUES
('about_who_we_are', 'Who We Are', 'Tko Smo Mi', 'Kim Biziz', 'Wer wir sind'),
('about_who_we_are_text', 
'AP Global Services Group brings together two crucial fields: International Project Management and Job Placement. Our experience and expertise empower us to provide tailored solutions for diverse challenges.',
'AP Global Services Group objedinjuje dva ključna područja: Međunarodno upravljanje projektima i posredovanje u zapošljavanju. Naše iskustvo i stručnost omogućavaju nam pružanje prilagođenih rješenja za raznolike izazove.',
'AP Global Services Group, İki kilit alanı birleştirir: Uluslararası Proje Yönetimi ve Nitelikli İş Gücü. Deneyimimiz ve uzmanlığımız, çeşitli zorluklar için özel çözümler sunmamıza olanak tanır.',
'AP Global Services Group vereint zwei entscheidende Bereiche: Internationales Projektmanagement und Arbeitsvermittlung. Unsere Erfahrung und Expertise ermöglichen es uns, maßgeschneiderte Lösungen für vielfältige Herausforderungen zu bieten.'),
('about_vision', 'Our Vision', 'Naša Vizija', 'Vizyonumuz', 'Unsere Vision'),
('about_vision_text',
'Our aim is to build a bridge between skilled workers from around the world and companies in Europe. We believe in the power of collaboration and strive to exceed our customers expectations.',
'Naš cilj je izgraditi most između kvalificirani radnika iz cijelog svijeta i tvrtki u Europi. Vjerujemo u snagu suradnje i težimo prema tome da premašimo očekivanja naših klijenata.',
'Amacımız dünyanın dört bir yanından gelen yeteneklerle Avrupa\''daki şirketler arasında bir köprü kurmaktır. İş birliğinin gücüne inanıyor ve müşteri beklentilerimizi aşmayı hedefliyoruz.',
'Unser Bestreben ist es, eine Brücke zwischen Fachkräften aus der ganzen Welt und Unternehmen in Europa zu schlagen. Wir glauben an die Kraft der Zusammenarbeit und streben danach, die Erwartungen unserer Kunden zu übertreffen.'),
('about_mission', 'Our Mission', 'Naša Misija', 'Misyonumuz', 'Unsere Mission'),
('about_mission_text',
'With passion and dedication, we are committed to internationally placing qualified workers while simultaneously managing top-notch projects in various sectors. Our goal is to positively impact the global work landscape.',
'S predanošću i strašću zalažemo se za međunarodno posredovanje kvalificirane radne snage, istovremeno upravljajući vrhunskim projektima u različitim sektorima. Naš je cilj pozitivno utjecati na globalnu radnu scenu.',
'Lezzet ve bağlılıkla nitelikli işgücünü uluslararası düzeyde yerleştirmeyi ve aynı zamanda çeşitli sektörlerde üst düzey projeleri yönetmeyi taahhüt ediyoruz. Amacımız küresel iş peyzajına olumlu bir etki yapmaktır.',
'Mit Leidenschaft und Engagement setzen wir uns dafür ein, qualifizierte Arbeitskräfte international zu vermitteln und gleichzeitig erstklassige Projekte in verschiedenen Sektoren zu managen. Unser Ziel ist es, die globale Arbeitslandschaft positiv zu gestalten.'),
('about_why_us', 'Why AP Global Services Group?', 'Zašto AP Global Services Group?', 'Neden AP Global Services Group?', 'Warum AP Global Services Group?'),
('about_why_us_text',
'With us, you\''ll find not only a team of experts but also a partner who shares your vision. Our transparent approach, commitment to excellence, and customer-centric philosophy set us apart.',
'Kod nas ćete pronaći ne samo tim stručnjaka, već i partnera koji dijeli vašu viziju. Naš transparentan pristup, predanost izvrsnosti i filozofija usredotočena na klijenta izdvajaju nas od drugih.',
'Bizde sadece bir uzman ekibi değil, aynı zamanda vizyonunuzu paylaşan bir ortak bulacaksınız. Şeffaf yaklaşımımız, mükemmeliyetimize olan bağlılığımız ve müşteri odaklı felsefemiz bizi diğerlerinden ayıran özelliklerimizdir.',
'Bei uns finden Sie nicht nur ein Team von Experten, sondern auch einen Partner, der Ihre Vision teilt. Unsere transparente Arbeitsweise, unser Engagement für Exzellenz und unsere kundenorientierte Herangehensweise zeichnen uns aus.'),
('about_team', 'Our Team', 'Naš Tim', 'Ekibimiz', 'Unser Team'),
('about_team_text',
'AP Global Services Group consists of a diverse team of professionals distinguished by their global perspective, expertise, and passion. Each member contributes to realizing our mission and ensuring the success of our customers.',
'AP Global Services Group čini raznolik tim stručnjaka koji se ističe svojom globalnom perspektivom, stručnošću i strašću. Svaki član doprinosi ostvarivanju naše misije i osigurava uspjeh naših klijenata.',
'AP Global Services Group, global perspektifi, uzmanlığı ve tutkusu ile öne çıkan çeşitli uzmanlardan oluşan bir ekipten oluşmaktadır. Her bir üye, misyonumuzu gerçekleştirmeye ve müşterilerimizin başarısını sağlamaya katkıda bulunmaktadır.',
'AP Global Services Group besteht aus einem vielfältigen Team von Fachleuten, das sich durch seine globale Perspektive, sein Fachwissen und seine Leidenschaft auszeichnet. Jedes Mitglied trägt dazu bei, unsere Mission zu verwirklichen und den Erfolg unserer Kunden sicherzustellen.'),
('about_contact_us', 'Contact Us!', 'Kontaktirajte Nas!', 'Bize Ulaşın!', 'Kontaktieren Sie uns!'),
('about_contact_us_text',
'Would you like to learn more about us or how we can assist you? We are at your service. Use the contact form. We look forward to getting to know you.',
'Želite li saznati više o nama ili kako vam možemo pomoći? Tu smo za vas. Iskoristite kontakt obrazac. Radujemo se upoznavanju s vama.',
'Bizi daha yakından tanımak mı istiyorsunuz veya size nasıl yardımcı olabileceğimizi mi öğrenmek istiyorsunuz? Hizmetinizdeyiz. İletişim formunu kullanın. Sizi tanımaktan memnuniyet duyarız.',
'Möchten Sie mehr über uns erfahren oder wie wir Ihnen helfen können? Wir stehen Ihnen zur Verfügung. Nutzen Sie das Kontaktformular. Wir freuen uns darauf, Sie kennenzulernen.'),
('intro_title', 
'Our expertise spans two key areas: International Project Management and International Job Placement. Learn more about our outstanding services in these two fields:',
'Naše stručnosti obuhvaćaju dva ključna područja: Međunarodno upravljanje projektima i posredovanje u zapošljavanju. Saznajte više o našim iznimnim uslugama u ova dva područja:',
'Uzmanlığımız iki temel alana yayılmaktadır: Uluslararası Proje Yönetimi ve Uluslararası İş Bulma. Bu iki alandaki üstün hizmetlerimiz hakkında daha fazla bilgi edinin:',
'Unsere Expertise erstreckt sich über zwei Schlüsselbereiche: Internationales Projektmanagement und Internationale Arbeitsvermittlung. Erfahren Sie mehr über unsere herausragenden Dienstleistungen in diesen beiden Bereichen:'),
('project_management_title', 'International Project Management', 'Međunarodno upravljanje projektima', 'Uluslararası Proje Yönetimi', 'Internationales Projektmanagement'),
('project_management_text'.
'Our international project management offers comprehensive services for companies operating in global markets. We understand the unique aspects and challenges of international projects, utilizing our expertise to ensure your success.',
'Naše međunarodno upravljanje projektima pruža sveobuhvatne usluge tvrtkama koje posluju na globalnim tržištima. Razumijemo jedinstvene aspekte i izazove međunarodnih projekata, koristeći naše stručnosti kako bismo osigurali vaš uspjeh.',
'Uluslararası projelerde faaliyet gösteren şirketler için kapsamlı hizmetler sunan uluslararası projemiz, uluslararası projelerin benzersiz yönlerini ve zorluklarını anlamakta ve başarınızı sağlamak için uzmanlığımızı kullanmaktadır.',
'Unser internationales Projektmanagement bietet umfassende Dienstleistungen für Unternehmen, die in globalen Märkten agieren. Wir verstehen die Einzigartigkeiten und Herausforderungen internationaler Projekte und setzen unsere Expertise ein, um Ihren Erfolg sicherzustellen.'),
('project_management_services', 'Our Services', 'Naše usluge', 'Hizmetlerimiz', 'Unsere Leistungen'),
('project_management_services_project_conceptualization_and_planning', 'Project Conceptualization and Planning', 'Koncipiranje i planiranje projekta', 'Proje Kavramlaştırma ve Planlama', 'Projektkonzeption und -planung'),
('project_management_services_project_conceptualization_and_planning_text',
'From idea to implementation, we develop customized project plans that meet the specific requirements of your company and the target region.',
'Od ideje do provedbe razvijamo prilagođene planove projekta koji zadovoljavaju specifične zahtjeve vaše tvrtke i ciljne regije.',
'Fikirden uygulamaya kadar, şirketinizin ve hedef bölgenin özel gereksinimlerini karşılayan özel projeler planları oluşturuyoruz.',
'Von der Idee bis zur Umsetzung erarbeiten wir maßgeschneiderte Projektpläne, die den spezifischen Anforderungen Ihres Unternehmens und der Zielregion gerecht werden.'),
('project_management_services_resource_management', 'Resource Management', 'Upravljanje resursima', 'Kaynak Yönetimi', 'Ressourcenmanagement'),
('project_management_services_resource_management_text',
'We optimize resource utilization and allocation to maximize efficiency and cost-effectiveness, regardless of where your project takes place in the world.',
'Optimiziramo upotrebu i raspodjelu resursa kako bismo maksimizirali učinkovitost i ekonomičnost, bez obzira gdje se vaš projekt odvija u svijetu.',
'Kaynak kullanımını ve tahsisini optimize ederek, projenizin dünyanın neresinde olursa olsun verimliliği ve maliyet etkinliği maksimize ediyoruz.',
'Wir optimieren Ressourcennutzung und -zuweisung, um Effizienz und Wirtschaftlichkeit zu maximieren, egal in welchem Teil der Welt Ihr Projekt stattfindet.'),
('project_management_services_risk_management', 'Risk Management', 'Upravljanje rizicima', 'Risikomanagement', 'Risikomanagement'),
('project_management_services_risk_management_text',
'Our experts identify potential risks early on and develop strategies to minimize risks, ensuring smooth project workflows.',
'Naši stručnjaci rano prepoznaju potencijalne rizike i razvijaju strategije za minimiziranje rizika, osiguravajući glatki tijek projekta.',
'Uzmanlarımız, potansiyel riskleri erken tespit eder ve riskleri minimize etmek için stratejiler geliştirir, böylece projelerin sorunsuz ilerlemesini sağlarlar.',
'Unsere Experten identifizieren potenzielle Risiken frühzeitig und entwickeln Strategien, um Risiken zu minimieren und Projektabläufe reibungslos zu gestalten.'),
('project_management_services_quality_control', 'Quality Control', 'Kontrola kvalitete', 'Kalite Kontrolü', 'Qualitätskontrolle'),
('project_management_services_quality_control_text',
'With a strong focus on quality assurance, we ensure that your projects adhere to the highest standards and exceed expectations.',
'S snažnim fokusom na osiguranje kvalitete, osiguravamo da vaši projekti odgovaraju najvišim standardima i premašuju očekivanja.',
'Kalite güvencesine güçlü bir odaklanma ile projelerinizin en yüksek standartlara uygun olduğundan ve beklentileri aştığından emin oluyoruz.',
'Mit einem starken Fokus auf Qualitätssicherung gewährleisten wir, dass Ihre Projekte höchsten Standards entsprechen und die Erwartungen übertreffen.'),
('project_management_services_progress_monitoring', 'Progress Monitoring', 'Pratnja napretka', 'İlerleme Takibi', 'Fortschrittsüberwachung'),
('project_management_services_progress_monitoring_text',
'Through continuous monitoring of project progress, we ensure that milestones are reached on time and the project goals are achieved.',
'Kontinuiranim praćenjem napretka projekta osiguravamo da se premašuju ključni trenuci i postiže cilj projekta.',
'Projelerin sürekli takibi ile kilometre taşlarının zamanında ulaşıldığından ve projenin hedefine ulaşıldığından emin oluyoruz.',
'Durch kontinuierliches Monitoring des Projektfortschritts stellen wir sicher, dass Meilensteine rechtzeitig erreicht und das Projektziel erreicht wird.'),
('project_management_services_communication_management', 'Communication Management', 'Upravljanje komunikacijom', 'İletişim Yönetimi', 'Kommunikationsmanagement'),
('project_management_services_communication_management_text',
'Effective communication is crucial. We ensure that all project stakeholders are well-informed and foster an open and transparent communication culture.',
'Učinkovita komunikacija ključna je. Osiguravamo da su svi dionici projekta dobro informirani i potičemo otvorenu i transparentnu kulturu komunikacije.',
'Etkili iletişim kritiktir. Tüm proje paydaşlarının iyi bilgilendirildiğinden emin oluruz ve açık ve şeffaf bir iletişim kültürünü teşvik ederiz.',
'Eine effektive Kommunikation ist entscheidend. Wir sorgen dafür, dass alle Projektbeteiligten stets gut informiert sind und fördern eine offene und transparente Kommunikationskultur.'),
('project_management_why_us', 'Why International Project Management with Us?', 'Zašto međunarodno upravljanje projektima s nama?', 'Neden Bizimle Uluslararası Proje Yönetimi?', 'Warum Internationales Projektmanagement mit uns?'),
('project_management_why_us_text',
'Our experience, global perspective, and tailored approach make us your reliable partner for successful international projects. We navigate through cultural differences, linguistic diversity, and complex logistical challenges to ensure that your project is a success in every aspect.',
'Naše iskustvo, globalna perspektiva i prilagođeni pristup čine nas vašim pouzdanim partnerom za uspješne međunarodne projekte. Snalazimo se kroz kulturne razlike, jezičnu raznolikost i kompleksne logističke izazove kako bismo osigurali da vaš projekt bude uspješan u svakom smislu.',
'Deneyimimiz, küresel bakış açımız ve özel yaklaşımımız, bizi başarılı uluslararası projeler için güvenilir bir ortak yapar. Kültürel farklılıklar, dil çeşitliliği ve karmaşık lojistik zorluklar arasında gezinerek projenizin her açıdan başarılı olmasını sağlıyoruz.',
'Unsere Erfahrung, globale Perspektive und maßgeschneiderte Herangehensweise machen uns zu Ihrem verlässlichen Partner für erfolgreiche internationale Projekte. Wir navigieren durch kulturelle Unterschiede, sprachliche Vielfalt und komplexe logistische Herausforderungen, um sicherzustellen, dass Ihr Projekt in jeder Hinsicht ein Erfolg wird.'),
('job_placement_title', 'International Job Placement', 'Međunarodno posredovanje u zapošljavanju', 'Uluslararası İş Yerleştirme', 'Internationale Arbeitsvermittlung'),
('job_placement_overview_title', 'Integrate Qualified Professionals Worldwide', 'Integracija kvalificiranih stručnjaka diljem svijeta', 'Dünya Çapında Nitelikli Profesyonelleri Entegre Etme', 'Qualifizierte Fachkräfte weltweit integrieren'),
('job_placement_overview_text',
'Our international job placement goes beyond being a link between companies in Europe and highly skilled professionals from around the world. We understand that selecting the right employees is crucial for the success of your business. Therefore, we offer comprehensive services from needs analysis to integration, ensuring that your teams acquire the best workforce.',
'Naše međunarodno posredovanje u zapošljavanju više je od poveznice između tvrtki u Europi i visokokvalificiranih stručnjaka iz cijelog svijeta. Razumijemo da je odabir pravih zaposlenika ključan za uspjeh vaše tvrtke. Stoga nudimo sveobuhvatnu uslugu, počevši od analize potreba pa sve do integracije, kako bismo osigurali da vaši timovi dobiju najbolje radnike.',
'Uluslararası iş yerleştirmemiz, Avrupa\''daki şirketlerle dünyanın dört bir yanındaki yüksek nitelikli profesyoneller arasında sadece bir bağlantı olmaktan öteye geçer. Doğru çalışanları seçmek işletmenizin başarısı için kritik öneme sahiptir. Bu nedenle, ihtiyaç analizinden entegrasyona kadar kapsamlı bir hizmet sunuyor, takımlarınızın en iyi işgücünü elde etmesini sağlıyoruz.',
'Unsere internationale Arbeitsvermittlung ist mehr als nur ein Bindeglied zwischen Unternehmen in Europa und hochqualifizierten Fachkräften aus aller Welt. Wir verstehen, dass die Auswahl der richtigen Mitarbeiter entscheidend für den Erfolg Ihres Unternehmens ist. Daher bieten wir einen umfassenden Service von der Bedarfsanalyse bis zur Integration, um sicherzustellen, dass Ihre Teams die besten Arbeitskräfte erhalten.'),
('job_placement_services', 'Our Services', 'Naše usluge', 'Hizmetlerimiz', 'Unsere Leistungen'),
('job_placement_services_needs_analysis_and_personnel_consulting', 'Needs Analysis and Personnel Consulting', 'Analiza potreba i savjetovanje o osoblju', 'İhtiyaç Analizi ve Personel Danışmanlığı', 'Bedarfsanalyse und Personalberatung'),
('job_placement_services_needs_analysis_and_personnel_consulting_text',
'Our journey begins with a thorough analysis of your personnel needs. Through in-depth consultations, we gain insights into the culture, values, and specific requirements of your company.',
'Naše putovanje započinje temeljnom analizom vaših potreba za osobljem. Kroz duboka savjetovanja dobivamo uvid u kulturu, vrijednosti i specifične zahtjeve vaše tvrtke.',
'Yolculuğumuz, personel ihtiyaçlarınızın kapsamlı bir analizi ile başlar. Derinlemesine danışmalarla, şirketinizin kültürüne, değerlerine ve özel gereksinimlerine dair bilgiler ediniriz.',
'Unsere Reise beginnt mit einer gründlichen Analyse Ihrer Personalbedürfnisse. Durch tiefgehende Beratungen gewinnen wir Einblicke in die Kultur, Werte und spezifischen Anforderungen Ihres Unternehmens.'),
('job_placement_services_international_recruitment_process', 'International Recruitment Process', 'Međunarodni proces regrutiranja', 'Uluslararası İstihdam Süreci', 'Internationaler Rekrutierungs-Prozess'),
('job_placement_services_international_recruitment_process_text',
'Every industry has its unique challenges and requirements. Our recruitment process is carefully tailored to meet the specific needs of your industry, ensuring that we select candidates with the right skills and cultural adaptations.',
'Svaka industrija ima svoje izazove i zahtjeve. Naš proces regrutiranja pažljivo je usmjeren na zadovoljenje specifičnih potreba vaše industrije i osiguravanje odabira kandidata s pravim vještinama i kulturnim prilagodbama.',
'Her sektörün kendine özgü zorlukları ve gereksinimleri vardır. İstihdam sürecimiz, sektörünüzün özel ihtiyaçlarını karşılamak için özenle tasarlanmıştır, böylece doğru becerilere ve kültürel uyumlara sahip adayları seçtiğimizden emin oluruz.',
('job_placement_services_visa_and_immigration_support_title', 'Visa and Immigration Support', 'Podrška za vize i imigraciju', 'Vize ve Göçmenlik Desteği', 'Visa- und Einwanderungsunterstützung'),






/* Services - International Job Placement
Integrating Qualified Professionals Worldwide
Our international job placement goes beyond being a link between companies in Europe
and highly skilled professionals from around the world. We understand that selecting the
right employees is crucial for the success of your business. Therefore, we offer
comprehensive services from needs analysis to integration, ensuring that your teams
acquire the best workforce.
Our services for Companies:
• Needs Analysis and Personnel Consulting:
Our journey begins with a thorough analysis of your personnel needs. Through in-depth
consultations, we gain insights into the culture, values, and specific requirements of your
company.
• International Recruitment Process:
Every industry has its unique challenges and requirements. Our recruitment process is
carefully tailored to meet the specific needs of your industry, ensuring that we select
candidates with the right skills and cultural adaptations.
• Visa and Immigration Support:
We take care of the complete visa application process to ensure a smooth path for your
international hires, from application to approval.
• Onboarding and Integration:
We understand that success goes beyond mere hiring. Our comprehensive onboarding
process ensures a smooth transition for new employees, focusing on cultural integration
within your company.
Our services for Job Seekers:
• Career Counseling and Job Placement:
We are your reliable partner in seeking international career opportunities. Our services
range from job placement to successful integration at the workplace.
• Visa and Immigration Support:
Job seekers can rely on our expertise when it comes to obtaining work visas and
navigating immigration processes.
Why International Job Placement with Us:
Our dedicated team brings not only experience and expertise but also a global network to
ensure that you can attract and retain the best professionals for your company. We
understand the intricacies of international work dynamics and offer a tailored approach to
meet your staffing needs.

Usluge - Međunarodno posredovanje u zapošljavanju
Integracija kvalificiranih stručnjaka diljem svijeta
Naše međunarodno posredovanje u zapošljavanju više je od poveznice između tvrtki u
Europi i visokokvalificiranih stručnjaka iz cijelog svijeta. Razumijemo da je odabir pravih
zaposlenika ključan za uspjeh vaše tvrtke. Stoga nudimo sveobuhvatnu uslugu, počevši od
analize potreba pa sve do integracije, kako bismo osigurali da vaši timovi dobiju najbolje
radnike.
Naše usluge za tvrtke:
• Analiza potreba i savjetovanje o osoblju:
Naše putovanje započinje temeljnom analizom vaših potreba za osobljem. Kroz duboka
savjetovanja dobivamo uvid u kulturu, vrijednosti i specifične zahtjeve vaše tvrtke.
• Međunarodni proces regrutiranja:
Svaka industrija ima svoje izazove i zahtjeve. Naš proces regrutiranja pažljivo je usmjeren
na zadovoljenje specifičnih potreba vaše industrije i osiguravanje odabira kandidata s
pravim vještinama i kulturnim prilagodbama.
• Podrška za vize i imigraciju:
Brinemo se o cijelom postupku prijave za vize sve do njihova dobivanja, kako bismo
osigurali što bezbolniji put za vaše međunarodne nove zaposlenike.
Onboarding i integracija:
Razumijemo da uspjeh nije ograničen samo na zapošljavanje. Naš cjelovit proces
uvođenja osigurava glatki prijelaz za nove zaposlenike i fokusira se na kulturnu integraciju
u vašoj tvrtki.
Naše usluge za radnike u potrazi za poslom:
• Karijerno savjetovanje i posredovanje u zapošljavanju:
Mi smo vaš pouzdan partner u potrazi za međunarodnim karijernim mogućnostima. Naše
usluge obuhvaćaju posredovanje u zapošljavanju i uspješnu integraciju na radnom mjestu.
• Podrška za vize i imigraciju:
Osobe u potrazi za poslom mogu se osloniti na naše iskustvo u dobivanju radnih viza i
snalaženju u postupcima imigracije.
Zašto međunarodno posredovanje u zapošljavanju s nama:
Naš predani tim donosi ne samo iskustvo i stručnost, već i globalnu mrežu kako bismo
osigurali da možete privući i zadržati najbolje stručnjake za vašu tvrtku. Razumijemo
nijanse međunarodne dinamike rada i pružamo prilagođeni pristup kako bismo zadovoljili
vaše potrebe za osobljem.

Usluge - Međunarodno posredovanje u zapošljavanju
Integracija kvalificiranih stručnjaka diljem svijeta
Naše međunarodno posredovanje u zapošljavanju više je od poveznice između tvrtki u
Europi i visokokvalificiranih stručnjaka iz cijelog svijeta. Razumijemo da je odabir pravih
zaposlenika ključan za uspjeh vaše tvrtke. Stoga nudimo sveobuhvatnu uslugu, počevši od
analize potreba pa sve do integracije, kako bismo osigurali da vaši timovi dobiju najbolje
radnike.
Naše usluge za tvrtke:
• Analiza potreba i savjetovanje o osoblju:
Naše putovanje započinje temeljnom analizom vaših potreba za osobljem. Kroz duboka
savjetovanja dobivamo uvid u kulturu, vrijednosti i specifične zahtjeve vaše tvrtke.
• Međunarodni proces regrutiranja:
Svaka industrija ima svoje izazove i zahtjeve. Naš proces regrutiranja pažljivo je usmjeren
na zadovoljenje specifičnih potreba vaše industrije i osiguravanje odabira kandidata s
pravim vještinama i kulturnim prilagodbama.
• Podrška za vize i imigraciju:
Brinemo se o cijelom postupku prijave za vize sve do njihova dobivanja, kako bismo
osigurali što bezbolniji put za vaše međunarodne nove zaposlenike.
Onboarding i integracija:
Razumijemo da uspjeh nije ograničen samo na zapošljavanje. Naš cjelovit proces
uvođenja osigurava glatki prijelaz za nove zaposlenike i fokusira se na kulturnu integraciju
u vašoj tvrtki.
Naše usluge za radnike u potrazi za poslom:
• Karijerno savjetovanje i posredovanje u zapošljavanju:
Mi smo vaš pouzdan partner u potrazi za međunarodnim karijernim mogućnostima. Naše
usluge obuhvaćaju posredovanje u zapošljavanju i uspješnu integraciju na radnom mjestu.
• Podrška za vize i imigraciju:
Osobe u potrazi za poslom mogu se osloniti na naše iskustvo u dobivanju radnih viza i
snalaženju u postupcima imigracije.
Zašto međunarodno posredovanje u zapošljavanju s nama:
Naš predani tim donosi ne samo iskustvo i stručnost, već i globalnu mrežu kako bismo
osigurali da možete privući i zadržati najbolje stručnjake za vašu tvrtku. Razumijemo
nijanse međunarodne dinamike rada i pružamo prilagođeni pristup kako bismo zadovoljili
vaše potrebe za osobljem.

Dienstleistungen - Internationale Arbeitsvermittlung
Qualifizierte Fachkräfte weltweit integrieren
Unsere internationale Arbeitsvermittlung ist mehr als nur ein Bindeglied zwischen
Unternehmen in Europa und hochqualifizierten Fachkräften aus aller Welt. Wir verstehen,
dass die Auswahl der richtigen Mitarbeiter entscheidend für den Erfolg Ihres
Unternehmens ist. Daher bieten wir einen umfassenden Service von der Bedarfsanalyse
bis zur Integration, um sicherzustellen, dass Ihre Teams die besten Arbeitskräfte erhalten.
Unsere Dienstleistungen für Unternehmen:
• Bedarfsanalyse und Personalberatung:
Unsere Reise beginnt mit einer gründlichen Analyse Ihrer Personalbedürfnisse. Durch
tiefgehende Beratungen gewinnen wir Einblicke in die Kultur, Werte und spezifischen
Anforderungen Ihres Unternehmens.
• Internationaler Rekrutierungs-Prozess:
Jede Branche hat ihre eigenen Herausforderungen und Anforderungen. Unser
Rekrutierungs-Prozess ist sorgfältig darauf ausgerichtet, die spezifischen Bedürfnisse
Ihrer Branche zu erfüllen und sicherzustellen, dass wir Kandidaten mit den richtigen
Fähigkeiten und kulturellen Anpassungen auswählen.
• Visum- und Einwanderungsunterstützung:
Wir kümmern uns um den kompletten Visa-Antragsprozess bis hin zum Erhalt, um
sicherzustellen, dass der Weg für Ihre internationalen Neueinstellungen so reibungslos wie
möglich verläuft.
• Onboarding und Integration:
Wir verstehen, dass der Erfolg über die bloße Einstellung hinausgeht. Unser umfassender
Onboarding-Prozess gewährleistet einen reibungslosen Übergang für neue Mitarbeiter und
konzentriert sich auf die kulturelle Integration in Ihrem Unternehmen.
Unsere Dienstleistungen für Arbeitssuchende:
• Karriereberatung und Arbeitsvermittlung:
Wir sind Ihr verlässlicher Partner auf der Suche nach internationalen
Karrieremöglichkeiten. Unsere Dienstleistungen reichen von der Jobvermittlung bis zur
erfolgreichen Integration am Arbeitsort.
• Visum- und Einwanderungsunterstützung:
Arbeitssuchende können auf unsere Expertise vertrauen, wenn es um die Erlangung von
Arbeitsvisa und die Navigation durch Einwanderungsprozesse geht.
Warum Internationale Arbeitsvermittlung mit uns:
Unser engagiertes Team bringt nicht nur Erfahrung und Fachkenntnisse mit, sondern auch
ein globales Netzwerk, um sicherzustellen, dass Sie die besten Fachkräfte für Ihr
Unternehmen gewinnen und halten können. Wir verstehen die Feinheiten der
internationalen Arbeitsdynamik und bieten einen maßgeschneiderten Ansatz, um Ihren
Personalbedarf zu decken.

Hizmetler - Uluslararası İş Yerleştirme
Dünya Çapında Nitelikli Profesyonelleri Entegre Etme
Uluslararası iş yerleştirmemiz, Avrupa'daki şirketlerle dünyanın dört bir yanındaki yüksek
nitelikli profesyoneller arasında sadece bir bağlantı olmaktan öteye geçer. Doğru
çalışanları seçmek işletmenizin başarısı için kritik öneme sahiptir. Bu nedenle, ihtiyaç
analizinden entegrasyona kadar kapsamlı bir hizmet sunuyor, takımlarınızın en iyi
işgücünü elde etmesini sağlıyoruz.
Şirketler için hizmetlerimiz:
• İhtiyaç Analizi ve Personel Danışmanlığı:
Yolumuz, personel ihtiyaçlarınızın kapsamlı bir analizi ile başlar. Derinlemesine danışmalar
aracılığıyla şirketinizin kültürü, değerleri ve özel gereksinimleri konusunda içgörü
kazanırız.
• Uluslararası İşe Alım Süreci:
Her sektörün kendine özgü zorlukları ve gereksinimleri vardır. İşe alım sürecimiz,
endüstrinizin özel ihtiyaçlarını karşılamak için özenle tasarlanmıştır, böylece doğru
becerilere ve kültürel adaptasyonlara sahip adayları seçeriz.
• Vize ve Göç Desteği:
Ulusal çaylarınız için düzgün bir yol sağlamak adına başvurudan onay alınana kadar vize
başvuru sürecini yönetiyoruz.
• Oluşturma ve Entegrasyon:
Başarıya sadece işe alma ile sınırlı olmadığını anlıyoruz. Kapsamlı entegrasyon sürecimiz,
yeni çalışanlar için sorunsuz bir geçiş sağlar ve şirketinizde kültürel entegrasyona
odaklanır.
İş arayanlar için hizmetlerimiz:
• Kariyer Danışmanlığı ve İş Yerleştirme:
Uluslararası kariyer fırsatları arayışınızda güvenilir ortağınızız. Hizmetlerimiz iş
yerleştirmesinden işyerinde başarılı bir entegrasyona kadar uzanır.
• Vize ve Göç Desteği:
İş arayanlar, çalışma vizeleri almak ve göç süreçlerini yönlendirmek konusunda
uzmanlığımıza güvenebilir.
Neden Bizimle Uluslararası İş Vermek:
Başarılı uluslararası projeler için en iyi uzmanları kazanmak ve elde tutmak için deneyim,
uzmanlık ve küresel bir ağ getiren kararlı ekibimizle çalışıyoruz. Uluslararası iş dinamiğinin
ince detaylarını anlıyoruz ve personel ihtiyaçlarınızı karşılamak için özelleştirilmiş bir
yaklaşım sunuyoruz. */