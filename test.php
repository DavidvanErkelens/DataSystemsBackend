<?php

// Load external libraries
require_once(__DIR__ . '/vendor/autoload.php');

// Load config
require_once 'config.php';

// Make sure classes get included when necessary
$autoloader = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

// // Create backend with included config
$backend = new Backend($config);

// foreach ($backend->conversations() as $c)
// {
//     // Get random day
//     $day = rand(1, 31);

//     // Format string
//     $date = "2018-12-{$day} 00:00:00";

//     $datetime = new DateTime($date);

//     $c->setDateTime($datetime);
// }

$backend->conversationByIdentifier("voip-dda7c88c6e-20130323_053612")->firstModelRating()->setValue(0.7510085149811003);
$backend->conversationByIdentifier("voip-31de0daa7b-20130401_204621")->firstModelRating()->setValue(0.06813818356599521);
$backend->conversationByIdentifier("voip-9819537952-20130327_023510")->firstModelRating()->setValue(0.20806683262178335);
$backend->conversationByIdentifier("voip-e61fa89add-20130326_004919")->firstModelRating()->setValue(0.711289122060021);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_190516")->firstModelRating()->setValue(0.2187460965928311);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130325_192310")->firstModelRating()->setValue(0.27618564518654826);
$backend->conversationByIdentifier("voip-7f9c1c8411-20130401_164058")->firstModelRating()->setValue(0.051946971375983676);
$backend->conversationByIdentifier("voip-59bc8a2167-20130325_141345")->firstModelRating()->setValue(0.2001083926260662);
$backend->conversationByIdentifier("voip-b08f15a787-20130402_071910")->firstModelRating()->setValue(0.04691328853622549);
$backend->conversationByIdentifier("voip-d0341706f2-20130329_052811")->firstModelRating()->setValue(0.21953268013025518);
$backend->conversationByIdentifier("voip-e8997b10da-20130329_000819")->firstModelRating()->setValue(0.5539288060980616);
$backend->conversationByIdentifier("voip-edb8609855-20130327_182651")->firstModelRating()->setValue(0.22778159568213566);
$backend->conversationByIdentifier("voip-edb8609855-20130327_182309")->firstModelRating()->setValue(0.7342095536082436);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_190850")->firstModelRating()->setValue(0.038004036627624575);
$backend->conversationByIdentifier("voip-50af5438f1-20130327_042937")->firstModelRating()->setValue(0.48477050607657);
$backend->conversationByIdentifier("voip-3b3edac94d-20130324_201858")->firstModelRating()->setValue(0.2737498559809807);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_144421")->firstModelRating()->setValue(0.7121339064310753);
$backend->conversationByIdentifier("voip-f22c2bf9c7-20130326_015536")->firstModelRating()->setValue(0.21732130846215716);
$backend->conversationByIdentifier("voip-d76851034e-20130326_221719")->firstModelRating()->setValue(0.09791785040808963);
$backend->conversationByIdentifier("voip-318851c80b-20130328_215616")->firstModelRating()->setValue(0.13025777605153616);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130327_175512")->firstModelRating()->setValue(0.3275698764171519);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_174015")->firstModelRating()->setValue(0.49422714119415523);
$backend->conversationByIdentifier("voip-249d0f617b-20130328_162005")->firstModelRating()->setValue(0.5443240429136124);
$backend->conversationByIdentifier("voip-da4a08ad84-20130328_154747")->firstModelRating()->setValue(0.08980707504192217);
$backend->conversationByIdentifier("voip-48c12815b3-20130326_011456")->firstModelRating()->setValue(0.25349414298658246);
$backend->conversationByIdentifier("voip-a31ca3e355-20130323_222700")->firstModelRating()->setValue(0.11085346871643341);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_125747")->firstModelRating()->setValue(0.5518963843027852);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_191418")->firstModelRating()->setValue(0.034195570017884855);
$backend->conversationByIdentifier("voip-36440f7305-20130326_140559")->firstModelRating()->setValue(0.043788980625890865);
$backend->conversationByIdentifier("voip-22c938c8ba-20130325_124542")->firstModelRating()->setValue(0.009956723138297315);
$backend->conversationByIdentifier("voip-340dbb333e-20130325_230054")->firstModelRating()->setValue(0.5237164361018445);
$backend->conversationByIdentifier("voip-52d599db9c-20130326_213541")->firstModelRating()->setValue(0.3465739814193651);
$backend->conversationByIdentifier("voip-8991b7bff6-20130326_231411")->firstModelRating()->setValue(0.2554466735309089);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130327_030955")->firstModelRating()->setValue(0.6929748725942549);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130402_005414")->firstModelRating()->setValue(0.31947120253603273);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130326_215254")->firstModelRating()->setValue(0.7758473868686867);
$backend->conversationByIdentifier("voip-fe4b6ef58f-20130325_220934")->firstModelRating()->setValue(0.47208402029445556);
$backend->conversationByIdentifier("voip-fb0047e535-20130326_051359")->firstModelRating()->setValue(0.30043219328072934);
$backend->conversationByIdentifier("voip-9f447ce48e-20130328_114744")->firstModelRating()->setValue(0.22644136721250982);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130327_174435")->firstModelRating()->setValue(0.35651770395491683);
$backend->conversationByIdentifier("voip-ef9aa63b85-20130328_190838")->firstModelRating()->setValue(0.02313129065532552);
$backend->conversationByIdentifier("voip-10beae627f-20130328_132217")->firstModelRating()->setValue(0.027334507652425146);
$backend->conversationByIdentifier("voip-381a50592b-20130326_042242")->firstModelRating()->setValue(0.1190562535005972);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130327_033913")->firstModelRating()->setValue(0.688939804502184);
$backend->conversationByIdentifier("voip-39a25ab2f8-20130326_120841")->firstModelRating()->setValue(0.23240051070269382);
$backend->conversationByIdentifier("voip-59bc8a2167-20130328_125821")->firstModelRating()->setValue(0.22793712622630521);
$backend->conversationByIdentifier("voip-340dbb333e-20130327_005751")->firstModelRating()->setValue(0.09560207199065977);
$backend->conversationByIdentifier("voip-922209b777-20130325_163118")->firstModelRating()->setValue(0.1883806938616725);
$backend->conversationByIdentifier("voip-2d3d74d091-20130325_230144")->firstModelRating()->setValue(0.2723862367986977);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130326_235613")->firstModelRating()->setValue(0.647980558797813);
$backend->conversationByIdentifier("voip-2d3d74d091-20130325_221539")->firstModelRating()->setValue(0.39429961871301056);
$backend->conversationByIdentifier("voip-d7853a398f-20130401_152954")->firstModelRating()->setValue(0.7096745067839801);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130326_023841")->firstModelRating()->setValue(0.21860606725980425);
$backend->conversationByIdentifier("voip-a8649977cf-20130323_161633")->firstModelRating()->setValue(0.46168820119295534);
$backend->conversationByIdentifier("voip-15d8a89cec-20130327_021758")->firstModelRating()->setValue(0.6725533383726835);
$backend->conversationByIdentifier("voip-6d6587c57d-20130328_235137")->firstModelRating()->setValue(0.2874870222138058);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_191131")->firstModelRating()->setValue(0.024023963041905277);
$backend->conversationByIdentifier("voip-b20968d1ea-20130323_111126")->firstModelRating()->setValue(0.04892967888575985);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130325_193723")->firstModelRating()->setValue(0.3823562278349183);
$backend->conversationByIdentifier("voip-13ff413553-20130328_172247")->firstModelRating()->setValue(0.009060514553924606);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_150347")->firstModelRating()->setValue(0.38850504368547906);
$backend->conversationByIdentifier("voip-8efef4eae9-20130325_232205")->firstModelRating()->setValue(0.5510751770486773);
$backend->conversationByIdentifier("voip-59bc8a2167-20130328_115953")->firstModelRating()->setValue(0.3538789820756855);
$backend->conversationByIdentifier("voip-fce37b0ccb-20130328_143934")->firstModelRating()->setValue(0.7985263586349983);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130325_204340")->firstModelRating()->setValue(0.646243354319842);
$backend->conversationByIdentifier("voip-0241bbae39-20130327_195830")->firstModelRating()->setValue(0.14651527787872082);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_180108")->firstModelRating()->setValue(0.45698455308627184);
$backend->conversationByIdentifier("voip-2d3d74d091-20130328_192945")->firstModelRating()->setValue(0.5671674586766179);
$backend->conversationByIdentifier("voip-78f497f314-20130324_140601")->firstModelRating()->setValue(0.6289322634076685);
$backend->conversationByIdentifier("voip-7e22911804-20130325_210616")->firstModelRating()->setValue(0.7566756599327709);
$backend->conversationByIdentifier("voip-b27a230d2e-20130323_043834")->firstModelRating()->setValue(0.20178690729955134);
$backend->conversationByIdentifier("voip-597cfafdee-20130402_010156")->firstModelRating()->setValue(0.19031291201822118);
$backend->conversationByIdentifier("voip-0fa32b1e78-20130328_152422")->firstModelRating()->setValue(0.05375808390166448);
$backend->conversationByIdentifier("voip-da10d74c3e-20130326_001047")->firstModelRating()->setValue(0.5659684098836136);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_143116")->firstModelRating()->setValue(0.5711372199066772);
$backend->conversationByIdentifier("voip-52eb280e7b-20130326_214113")->firstModelRating()->setValue(0.2528951187824247);
$backend->conversationByIdentifier("voip-ccf48b9a6a-20130329_042416")->firstModelRating()->setValue(0.13102791517426887);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_144320")->firstModelRating()->setValue(0.22155658829433514);
$backend->conversationByIdentifier("voip-78f497f314-20130324_201025")->firstModelRating()->setValue(0.4221263924462641);
$backend->conversationByIdentifier("voip-597cfafdee-20130402_004903")->firstModelRating()->setValue(0.0860059214215594);
$backend->conversationByIdentifier("voip-2c217000af-20130328_223847")->firstModelRating()->setValue(0.4394512482195953);
$backend->conversationByIdentifier("voip-96f43326a4-20130324_101528")->firstModelRating()->setValue(0.6907748450523309);
$backend->conversationByIdentifier("voip-6d6587c57d-20130329_000439")->firstModelRating()->setValue(0.6945250773883909);
$backend->conversationByIdentifier("voip-96f43326a4-20130324_100620")->firstModelRating()->setValue(0.08423282720856622);
$backend->conversationByIdentifier("voip-39a25ab2f8-20130328_150729")->firstModelRating()->setValue(0.39925716636081293);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130326_024044")->firstModelRating()->setValue(0.6919793398710103);
$backend->conversationByIdentifier("voip-31de0daa7b-20130402_132633")->firstModelRating()->setValue(0.06126705851816782);
$backend->conversationByIdentifier("voip-ec3c3aaf98-20130323_142016")->firstModelRating()->setValue(0.6036899275907449);
$backend->conversationByIdentifier("voip-2d3d74d091-20130328_182952")->firstModelRating()->setValue(0.15800449048467272);
$backend->conversationByIdentifier("voip-4660dd9eab-20130329_075906")->firstModelRating()->setValue(0.4902953500168952);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_143504")->firstModelRating()->setValue(0.21887768609664254);
$backend->conversationByIdentifier("voip-da10d74c3e-20130326_001657")->firstModelRating()->setValue(0.4865652214456958);
$backend->conversationByIdentifier("voip-10beae627f-20130328_122107")->firstModelRating()->setValue(0.06301671002421513);
$backend->conversationByIdentifier("voip-9f989824fd-20130324_072907")->firstModelRating()->setValue(0.1283172874572803);
$backend->conversationByIdentifier("voip-14cb91bc48-20130327_182446")->firstModelRating()->setValue(0.14017876969116805);
$backend->conversationByIdentifier("voip-10beae627f-20130401_164712")->firstModelRating()->setValue(0.030079632749819462);
$backend->conversationByIdentifier("voip-14cb91bc48-20130327_190136")->firstModelRating()->setValue(0.24627878909160905);
$backend->conversationByIdentifier("voip-6d6587c57d-20130328_140525")->firstModelRating()->setValue(0.6122953848868149);
$backend->conversationByIdentifier("voip-7e22911804-20130325_202635")->firstModelRating()->setValue(0.4194462840038262);
$backend->conversationByIdentifier("voip-9819537952-20130328_232122")->firstModelRating()->setValue(0.4677181522758831);
$backend->conversationByIdentifier("voip-52eb280e7b-20130326_212546")->firstModelRating()->setValue(0.19510591846416228);
$backend->conversationByIdentifier("voip-78f497f314-20130323_144347")->firstModelRating()->setValue(0.41778741581181195);
$backend->conversationByIdentifier("voip-340dbb333e-20130327_010913")->firstModelRating()->setValue(0.515752439370817);
$backend->conversationByIdentifier("voip-d66e12b45c-20130327_173320")->firstModelRating()->setValue(0.2028465971250026);
$backend->conversationByIdentifier("voip-88b68a9a41-20130322_221731")->firstModelRating()->setValue(0.043037586659184245);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130327_031211")->firstModelRating()->setValue(0.7204930033996523);
$backend->conversationByIdentifier("voip-64150aca03-20130401_194320")->firstModelRating()->setValue(0.07645443903967122);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_190156")->firstModelRating()->setValue(0.10324814390310415);
$backend->conversationByIdentifier("voip-78f497f314-20130323_183806")->firstModelRating()->setValue(0.5768851700278436);
$backend->conversationByIdentifier("voip-59bc8a2167-20130328_113646")->firstModelRating()->setValue(0.33666860557062017);
$backend->conversationByIdentifier("voip-bde2721237-20130325_154428")->firstModelRating()->setValue(0.2911357817610465);
$backend->conversationByIdentifier("voip-8991b7bff6-20130326_231255")->firstModelRating()->setValue(0.45094952438490815);
$backend->conversationByIdentifier("voip-78f497f314-20130324_203349")->firstModelRating()->setValue(0.325355203607618);
$backend->conversationByIdentifier("voip-561b472540-20130328_124350")->firstModelRating()->setValue(0.6939651978884577);
$backend->conversationByIdentifier("voip-7f9c1c8411-20130328_141000")->firstModelRating()->setValue(0.010601201703408412);
$backend->conversationByIdentifier("voip-5749b16764-20130328_150400")->firstModelRating()->setValue(0.2929913785931808);
$backend->conversationByIdentifier("voip-48c12815b3-20130326_034916")->firstModelRating()->setValue(0.04311657352940326);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_130444")->firstModelRating()->setValue(0.056845591414710586);
$backend->conversationByIdentifier("voip-317a1436fe-20130325_170800")->firstModelRating()->setValue(0.3226070024838419);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_173851")->firstModelRating()->setValue(0.47841100148765986);
$backend->conversationByIdentifier("voip-202b6a3cc4-20130327_184449")->firstModelRating()->setValue(0.3035198586860318);
$backend->conversationByIdentifier("voip-8efef4eae9-20130325_234031")->firstModelRating()->setValue(0.6857048683977031);
$backend->conversationByIdentifier("voip-6dbc3573bc-20130328_192107")->firstModelRating()->setValue(0.7548427844113691);
$backend->conversationByIdentifier("voip-52d599db9c-20130323_075058")->firstModelRating()->setValue(0.6185721553099107);
$backend->conversationByIdentifier("voip-59bc8a2167-20130325_133335")->firstModelRating()->setValue(0.2735676717183242);
$backend->conversationByIdentifier("voip-4a6ecc1f1c-20130329_152840")->firstModelRating()->setValue(0.3125514347897769);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_165927")->firstModelRating()->setValue(0.5667120469310709);
$backend->conversationByIdentifier("voip-3be3bda933-20130326_124519")->firstModelRating()->setValue(0.07356497610556316);
$backend->conversationByIdentifier("voip-935947e17b-20130328_165646")->firstModelRating()->setValue(0.34043454030464);
$backend->conversationByIdentifier("voip-e0035cc31b-20130323_210352")->firstModelRating()->setValue(0.49085014783196973);
$backend->conversationByIdentifier("voip-edb8609855-20130327_182512")->firstModelRating()->setValue(0.7766586242169865);
$backend->conversationByIdentifier("voip-7f9c1c8411-20130328_141931")->firstModelRating()->setValue(0.04376009051786014);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_134928")->firstModelRating()->setValue(0.20367578445738635);
$backend->conversationByIdentifier("voip-78f497f314-20130324_201923")->firstModelRating()->setValue(0.4359568674803662);
$backend->conversationByIdentifier("voip-d225fad9df-20130328_205151")->firstModelRating()->setValue(0.7444911545079492);
$backend->conversationByIdentifier("voip-31de0daa7b-20130401_220217")->firstModelRating()->setValue(0.0191701907794127);
$backend->conversationByIdentifier("voip-a8649977cf-20130323_161448")->firstModelRating()->setValue(0.04860816152678107);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130402_005804")->firstModelRating()->setValue(0.5596459162177609);
$backend->conversationByIdentifier("voip-340dbb333e-20130325_231020")->firstModelRating()->setValue(0.8413970867958889);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130326_215705")->firstModelRating()->setValue(0.2342187517312376);
$backend->conversationByIdentifier("voip-10beae627f-20130328_125615")->firstModelRating()->setValue(0.13509638391421297);
$backend->conversationByIdentifier("voip-8991b7bff6-20130326_230855")->firstModelRating()->setValue(0.32193834877103805);
$backend->conversationByIdentifier("voip-199d62165b-20130402_124137")->firstModelRating()->setValue(0.2933932459443112);
$backend->conversationByIdentifier("voip-c8821c664b-20130322_222908")->firstModelRating()->setValue(0.5885127185389395);
$backend->conversationByIdentifier("voip-39a25ab2f8-20130329_010257")->firstModelRating()->setValue(0.3735766570642022);
$backend->conversationByIdentifier("voip-10beae627f-20130328_164850")->firstModelRating()->setValue(0.35683056003331814);
$backend->conversationByIdentifier("voip-4c0d36762a-20130328_201131")->firstModelRating()->setValue(0.004376466637239335);
$backend->conversationByIdentifier("voip-10beae627f-20130329_125733")->firstModelRating()->setValue(0.4012079825285954);
$backend->conversationByIdentifier("voip-e72dba1759-20130325_210429")->firstModelRating()->setValue(0.568481278817202);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_150659")->firstModelRating()->setValue(0.5230675817583604);
$backend->conversationByIdentifier("voip-908884f5fd-20130326_235015")->firstModelRating()->setValue(0.7544673375403799);
$backend->conversationByIdentifier("voip-52d599db9c-20130323_074800")->firstModelRating()->setValue(0.613069628478636);
$backend->conversationByIdentifier("voip-908884f5fd-20130327_000655")->firstModelRating()->setValue(0.4187981565130332);
$backend->conversationByIdentifier("voip-d225fad9df-20130328_204846")->firstModelRating()->setValue(0.668149866823976);
$backend->conversationByIdentifier("voip-317a1436fe-20130325_142027")->firstModelRating()->setValue(0.40182715158949084);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130325_190707")->firstModelRating()->setValue(0.19058903270520175);
$backend->conversationByIdentifier("voip-f113dbb0e1-20130322_234230")->firstModelRating()->setValue(0.18679258817426891);
$backend->conversationByIdentifier("voip-22c938c8ba-20130325_130445")->firstModelRating()->setValue(0.16538979636312137);
$backend->conversationByIdentifier("voip-9f989824fd-20130325_204229")->firstModelRating()->setValue(0.7533894262034052);
$backend->conversationByIdentifier("voip-bde2721237-20130326_200505")->firstModelRating()->setValue(0.7825808175494189);
$backend->conversationByIdentifier("voip-a7ddefaeb3-20130328_173142")->firstModelRating()->setValue(0.035746638392054116);
$backend->conversationByIdentifier("voip-db80a9e6df-20130328_230211")->firstModelRating()->setValue(0.788258706236309);
$backend->conversationByIdentifier("voip-afd3aa91f0-20130325_230434")->firstModelRating()->setValue(0.8438666965510657);
$backend->conversationByIdentifier("voip-8586129f35-20130328_160121")->firstModelRating()->setValue(0.524173039511764);
$backend->conversationByIdentifier("voip-b08f15a787-20130402_065804")->firstModelRating()->setValue(0.799463090045556);
$backend->conversationByIdentifier("voip-b6618de447-20130326_211132")->firstModelRating()->setValue(0.6983679053269317);
$backend->conversationByIdentifier("voip-fbd422ad18-20130328_181748")->firstModelRating()->setValue(0.5125500158653976);
$backend->conversationByIdentifier("voip-f091d0e461-20130327_210252")->firstModelRating()->setValue(0.8305730030497076);
$backend->conversationByIdentifier("voip-7e22911804-20130324_184015")->firstModelRating()->setValue(0.11173665095228812);
$backend->conversationByIdentifier("voip-4f069a4136-20130402_034737")->firstModelRating()->setValue(0.8369277886907726);
$backend->conversationByIdentifier("voip-fe4b6ef58f-20130325_224823")->firstModelRating()->setValue(0.5972849127541324);
$backend->conversationByIdentifier("voip-da10d74c3e-20130326_002258")->firstModelRating()->setValue(0.7003464349379204);
$backend->conversationByIdentifier("voip-e8997b10da-20130327_200112")->firstModelRating()->setValue(0.775776219421092);
$backend->conversationByIdentifier("voip-4f069a4136-20130402_030550")->firstModelRating()->setValue(0.3345726217380007);
$backend->conversationByIdentifier("voip-72e50baa85-20130327_061457")->firstModelRating()->setValue(0.03860408057415631);
$backend->conversationByIdentifier("voip-d7853a398f-20130401_152711")->firstModelRating()->setValue(0.6752623180248116);
$backend->conversationByIdentifier("voip-72e50baa85-20130326_051315")->firstModelRating()->setValue(0.4739296461938503);
$backend->conversationByIdentifier("voip-e54437a6f0-20130326_195047")->firstModelRating()->setValue(0.26569271248765947);
$backend->conversationByIdentifier("voip-0f41c16f2f-20130401_235017")->firstModelRating()->setValue(0.5732127421926507);
$backend->conversationByIdentifier("voip-ef9aa63b85-20130329_125741")->firstModelRating()->setValue(0.7062395829529797);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_134301")->firstModelRating()->setValue(0.6999674863126767);
$backend->conversationByIdentifier("voip-0a45bc863d-20130325_202319")->firstModelRating()->setValue(0.5861214596083559);
$backend->conversationByIdentifier("voip-b08f15a787-20130326_022327")->firstModelRating()->setValue(0.5631999247097943);
$backend->conversationByIdentifier("voip-dda7c88c6e-20130323_055048")->firstModelRating()->setValue(0.13822772807626077);
$backend->conversationByIdentifier("voip-263ab0e49f-20130326_104358")->firstModelRating()->setValue(0.8615662494340939);
$backend->conversationByIdentifier("voip-4660dd9eab-20130329_080055")->firstModelRating()->setValue(0.4757035886293024);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_192048")->firstModelRating()->setValue(0.6403636940887332);
$backend->conversationByIdentifier("voip-52d599db9c-20130402_001953")->firstModelRating()->setValue(0.7875508748446952);
$backend->conversationByIdentifier("voip-6dbc3573bc-20130328_191808")->firstModelRating()->setValue(0.49426860698064967);
$backend->conversationByIdentifier("voip-e2a895cfe5-20130326_232742")->firstModelRating()->setValue(0.7584702449609037);
$backend->conversationByIdentifier("voip-e3b4879e0d-20130326_022732")->firstModelRating()->setValue(0.7566901997716979);
$backend->conversationByIdentifier("voip-202b6a3cc4-20130327_184721")->firstModelRating()->setValue(0.4691397964444971);
$backend->conversationByIdentifier("voip-249d0f617b-20130326_010500")->firstModelRating()->setValue(0.6698845301704237);
$backend->conversationByIdentifier("voip-03c2655d43-20130327_194221")->firstModelRating()->setValue(0.676516465847972);
$backend->conversationByIdentifier("voip-5cf59cc660-20130328_161054")->firstModelRating()->setValue(0.4299219355796388);
$backend->conversationByIdentifier("voip-8d5173f3a6-20130324_185203")->firstModelRating()->setValue(0.2909280686548967);
$backend->conversationByIdentifier("voip-fe4b6ef58f-20130325_233144")->firstModelRating()->setValue(0.7341616841096593);
$backend->conversationByIdentifier("voip-50af5438f1-20130327_041542")->firstModelRating()->setValue(0.5847054574752133);
$backend->conversationByIdentifier("voip-4f069a4136-20130327_205819")->firstModelRating()->setValue(0.6156012013842768);
$backend->conversationByIdentifier("voip-597cfafdee-20130402_010910")->firstModelRating()->setValue(0.5084085618132237);
$backend->conversationByIdentifier("voip-50af5438f1-20130402_085256")->firstModelRating()->setValue(0.7030164192386419);
$backend->conversationByIdentifier("voip-e0035cc31b-20130326_210405")->firstModelRating()->setValue(0.6487449088047135);
$backend->conversationByIdentifier("voip-00d76b791d-20130327_012331")->firstModelRating()->setValue(0.7140858876209514);
$backend->conversationByIdentifier("voip-22c938c8ba-20130325_123407")->firstModelRating()->setValue(0.15071343228999792);
$backend->conversationByIdentifier("voip-f17e3b578c-20130328_174111")->firstModelRating()->setValue(0.7504971388313442);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130325_185315")->firstModelRating()->setValue(0.46479488635446414);
$backend->conversationByIdentifier("voip-50af5438f1-20130402_084400")->firstModelRating()->setValue(0.7826191036925084);
$backend->conversationByIdentifier("voip-22756d9e8f-20130329_050114")->firstModelRating()->setValue(0.672705871045597);
$backend->conversationByIdentifier("voip-d225fad9df-20130328_183352")->firstModelRating()->setValue(0.7978856144101772);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_134104")->firstModelRating()->setValue(0.4412622312600743);
$backend->conversationByIdentifier("voip-4c0d36762a-20130328_203937")->firstModelRating()->setValue(0.7692705550528736);
$backend->conversationByIdentifier("voip-9735278861-20130401_155528")->firstModelRating()->setValue(0.7348159585334736);
$backend->conversationByIdentifier("voip-fdf8b50918-20130329_042348")->firstModelRating()->setValue(0.4925267672120648);
$backend->conversationByIdentifier("voip-90732b027d-20130327_183400")->firstModelRating()->setValue(0.5538157007148251);
$backend->conversationByIdentifier("voip-88b68a9a41-20130322_221603")->firstModelRating()->setValue(0.7854009791348797);
$backend->conversationByIdentifier("voip-e9b53d6ace-20130324_223300")->firstModelRating()->setValue(0.5293393936696744);
$backend->conversationByIdentifier("voip-aaa44b4121-20130326_055421")->firstModelRating()->setValue(0.7077423148941714);
$backend->conversationByIdentifier("voip-52d599db9c-20130402_002522")->firstModelRating()->setValue(0.7339029805830133);
$backend->conversationByIdentifier("voip-3b3edac94d-20130324_202415")->firstModelRating()->setValue(0.2877435591276095);
$backend->conversationByIdentifier("voip-5cf59cc660-20130328_171914")->firstModelRating()->setValue(0.7101452783841548);
$backend->conversationByIdentifier("voip-9f989824fd-20130324_075833")->firstModelRating()->setValue(0.793850417369901);
$backend->conversationByIdentifier("voip-72e50baa85-20130326_053934")->firstModelRating()->setValue(0.8030261368202054);
$backend->conversationByIdentifier("voip-2d2d103292-20130326_044020")->firstModelRating()->setValue(0.7554751294983899);
$backend->conversationByIdentifier("voip-b08f15a787-20130326_021953")->firstModelRating()->setValue(0.7744305005855693);
$backend->conversationByIdentifier("voip-6dbc3573bc-20130328_193216")->firstModelRating()->setValue(0.6866984083093374);
$backend->conversationByIdentifier("voip-43479eb5c2-20130324_003643")->firstModelRating()->setValue(0.741853002785805);
$backend->conversationByIdentifier("voip-b27a230d2e-20130329_034847")->firstModelRating()->setValue(0.7082463247548524);
$backend->conversationByIdentifier("voip-db80a9e6df-20130328_230014")->firstModelRating()->setValue(0.8365752971990824);
$backend->conversationByIdentifier("voip-52eb280e7b-20130326_213227")->firstModelRating()->setValue(0.7439378851198197);
$backend->conversationByIdentifier("voip-52d599db9c-20130325_135450")->firstModelRating()->setValue(0.6114311472754664);
$backend->conversationByIdentifier("voip-b20b6e847a-20130326_222313")->firstModelRating()->setValue(0.7546020404370749);
$backend->conversationByIdentifier("voip-f091d0e461-20130327_210653")->firstModelRating()->setValue(0.773606595110553);
$backend->conversationByIdentifier("voip-5cf59cc660-20130328_160946")->firstModelRating()->setValue(0.658537942140573);
$backend->conversationByIdentifier("voip-fe2783c40a-20130401_144037")->firstModelRating()->setValue(0.47609175610480114);
$backend->conversationByIdentifier("voip-88b68a9a41-20130324_003412")->firstModelRating()->setValue(0.8409967081407413);
$backend->conversationByIdentifier("voip-48c12815b3-20130402_051808")->firstModelRating()->setValue(0.7631741424233187);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_135219")->firstModelRating()->setValue(0.7182654408950215);
$backend->conversationByIdentifier("voip-fdf8b50918-20130329_013925")->firstModelRating()->setValue(0.5264785083156588);
$backend->conversationByIdentifier("voip-36440f7305-20130326_201757")->firstModelRating()->setValue(0.6860873543127834);
$backend->conversationByIdentifier("voip-ddcaad92a1-20130326_010701")->firstModelRating()->setValue(0.786106294654544);
$backend->conversationByIdentifier("voip-e30cb521fb-20130328_122635")->firstModelRating()->setValue(0.6998390167928984);
$backend->conversationByIdentifier("voip-e54437a6f0-20130325_133648")->firstModelRating()->setValue(0.1265075897519187);
$backend->conversationByIdentifier("voip-22a181cad5-20130326_022324")->firstModelRating()->setValue(0.6806341836226202);
$backend->conversationByIdentifier("voip-14f776f781-20130328_151904")->firstModelRating()->setValue(0.3744114873200278);
$backend->conversationByIdentifier("voip-52d599db9c-20130326_214615")->firstModelRating()->setValue(0.29027070026079016);
$backend->conversationByIdentifier("voip-ab4f1dbb59-20130325_214838")->firstModelRating()->setValue(0.7507804858507913);
$backend->conversationByIdentifier("voip-eaef6f434c-20130323_025316")->firstModelRating()->setValue(0.5694095928453721);
$backend->conversationByIdentifier("voip-f32f2cfdae-20130327_013132")->firstModelRating()->setValue(0.5778388584233286);
$backend->conversationByIdentifier("voip-a31ca3e355-20130323_222931")->firstModelRating()->setValue(0.1129746344695428);
$backend->conversationByIdentifier("voip-155e939ebc-20130327_203128")->firstModelRating()->setValue(0.7278739451395749);
$backend->conversationByIdentifier("voip-30772678da-20130328_192819")->firstModelRating()->setValue(0.668177456367577);
$backend->conversationByIdentifier("voip-7e22911804-20130324_184843")->firstModelRating()->setValue(0.5513784026153621);
$backend->conversationByIdentifier("voip-e2a895cfe5-20130325_233234")->firstModelRating()->setValue(0.7002942929521326);
$backend->conversationByIdentifier("voip-bb1fd497eb-20130325_132300")->firstModelRating()->setValue(0.512208338143417);
$backend->conversationByIdentifier("voip-2c217000af-20130325_221701")->firstModelRating()->setValue(0.7713776353707685);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_174504")->firstModelRating()->setValue(0.8062545992816256);
$backend->conversationByIdentifier("voip-aaa44b4121-20130327_171617")->firstModelRating()->setValue(0.7691900731769846);
$backend->conversationByIdentifier("voip-e72dba1759-20130325_210917")->firstModelRating()->setValue(0.5664938556032715);
$backend->conversationByIdentifier("voip-a31ca3e355-20130323_234926")->firstModelRating()->setValue(0.21898267682579417);
$backend->conversationByIdentifier("voip-561b472540-20130328_123209")->firstModelRating()->setValue(0.7652799089756521);
$backend->conversationByIdentifier("voip-22756d9e8f-20130329_045435")->firstModelRating()->setValue(0.4013941674935992);
$backend->conversationByIdentifier("voip-597cfafdee-20130402_005206")->firstModelRating()->setValue(0.6706706258702766);
$backend->conversationByIdentifier("voip-ad40cf5489-20130325_175141")->firstModelRating()->setValue(0.7779238299093053);
$backend->conversationByIdentifier("voip-4c25da9a27-20130327_141034")->firstModelRating()->setValue(0.7991453664911896);
$backend->conversationByIdentifier("voip-afd3aa91f0-20130325_225729")->firstModelRating()->setValue(0.3835087782929936);
$backend->conversationByIdentifier("voip-597cfafdee-20130328_234346")->firstModelRating()->setValue(0.6673417283957215);
$backend->conversationByIdentifier("voip-869dd52548-20130401_175624")->firstModelRating()->setValue(0.7635292952545556);
$backend->conversationByIdentifier("voip-dd9f7810fd-20130322_224705")->firstModelRating()->setValue(0.7888594930616027);
$backend->conversationByIdentifier("voip-e9b53d6ace-20130324_222642")->firstModelRating()->setValue(0.7767485274327512);
$backend->conversationByIdentifier("voip-dcaeb62b29-20130327_081541")->firstModelRating()->setValue(0.6559119490758256);
$backend->conversationByIdentifier("voip-d7aef99178-20130328_184726")->firstModelRating()->setValue(0.5050258604672425);
$backend->conversationByIdentifier("voip-318851c80b-20130328_220341")->firstModelRating()->setValue(0.5270729198839527);
$backend->conversationByIdentifier("voip-d225fad9df-20130328_205512")->firstModelRating()->setValue(0.22412044284389906);
$backend->conversationByIdentifier("voip-e8997b10da-20130329_011626")->firstModelRating()->setValue(0.8091049462644263);
$backend->conversationByIdentifier("voip-e54437a6f0-20130325_131749")->firstModelRating()->setValue(0.7758696241290408);
$backend->conversationByIdentifier("voip-4c25da9a27-20130325_181701")->firstModelRating()->setValue(0.807992345222697);
$backend->conversationByIdentifier("voip-03d6592b76-20130326_012136")->firstModelRating()->setValue(0.5657132579570179);
$backend->conversationByIdentifier("voip-e54437a6f0-20130325_141052")->firstModelRating()->setValue(0.6369152484901837);
$backend->conversationByIdentifier("voip-52eb280e7b-20130325_131334")->firstModelRating()->setValue(0.6233688431326607);
$backend->conversationByIdentifier("voip-7e22911804-20130324_193050")->firstModelRating()->setValue(0.7677861754586934);
$backend->conversationByIdentifier("voip-7e22911804-20130327_202516")->firstModelRating()->setValue(0.3583218815404256);
$backend->conversationByIdentifier("voip-aaa44b4121-20130326_051152")->firstModelRating()->setValue(0.3806483160792985);
$backend->conversationByIdentifier("voip-e0035cc31b-20130326_205255")->firstModelRating()->setValue(0.7540684166450735);
$backend->conversationByIdentifier("voip-fe4b6ef58f-20130325_233912")->firstModelRating()->setValue(0.5636088880164083);
$backend->conversationByIdentifier("voip-d7853a398f-20130401_161556")->firstModelRating()->setValue(0.669916306576268);
$backend->conversationByIdentifier("voip-bb1fd497eb-20130326_232439")->firstModelRating()->setValue(0.5075691020917013);
$backend->conversationByIdentifier("voip-249d0f617b-20130328_161812")->firstModelRating()->setValue(0.4247644189650206);
$backend->conversationByIdentifier("voip-52eb280e7b-20130326_212826")->firstModelRating()->setValue(0.6642348852198735);
$backend->conversationByIdentifier("voip-2d2d103292-20130329_042056")->firstModelRating()->setValue(0.49861117270604743);
$backend->conversationByIdentifier("voip-a8649977cf-20130323_160311")->firstModelRating()->setValue(0.687944759109903);
$backend->conversationByIdentifier("voip-59bc8a2167-20130328_130054")->firstModelRating()->setValue(0.5445353252321077);
$backend->conversationByIdentifier("voip-31d9d1a567-20130402_035757")->firstModelRating()->setValue(0.7832755122727277);
$backend->conversationByIdentifier("voip-b27a230d2e-20130329_033804")->firstModelRating()->setValue(0.771170460421947);
$backend->conversationByIdentifier("voip-62cc0cc55d-20130323_155046")->firstModelRating()->setValue(0.6021630813023398);
$backend->conversationByIdentifier("voip-9735278861-20130401_154251")->firstModelRating()->setValue(0.5387090093941653);
$backend->conversationByIdentifier("voip-13ff413553-20130328_180202")->firstModelRating()->setValue(0.7708746106810536);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130325_185940")->firstModelRating()->setValue(0.7827119744993236);
$backend->conversationByIdentifier("voip-583e7cede5-20130324_060405")->firstModelRating()->setValue(0.7331230487095426);
$backend->conversationByIdentifier("voip-4f069a4136-20130327_205937")->firstModelRating()->setValue(0.08827532390705704);
$backend->conversationByIdentifier("voip-dcaeb62b29-20130327_084207")->firstModelRating()->setValue(0.748210453832736);
$backend->conversationByIdentifier("voip-58047f5227-20130327_032835")->firstModelRating()->setValue(0.5980279982712362);
$backend->conversationByIdentifier("voip-3b3edac94d-20130323_201535")->firstModelRating()->setValue(0.8849944074602538);
$backend->conversationByIdentifier("voip-2d3d74d091-20130328_191642")->firstModelRating()->setValue(0.09134737213901553);
$backend->conversationByIdentifier("voip-e0035cc31b-20130323_211354")->firstModelRating()->setValue(0.8234275607283893);
$backend->conversationByIdentifier("voip-bde2721237-20130325_162622")->firstModelRating()->setValue(0.6699137941408301);
$backend->conversationByIdentifier("voip-4a6ecc1f1c-20130328_121528")->firstModelRating()->setValue(0.802956936840182);
$backend->conversationByIdentifier("voip-13ff413553-20130328_175302")->firstModelRating()->setValue(0.5989900610671208);
$backend->conversationByIdentifier("voip-b772dbf437-20130402_141548")->firstModelRating()->setValue(0.8439866502364225);
$backend->conversationByIdentifier("voip-dcaeb62b29-20130327_083422")->firstModelRating()->setValue(0.7767809220290406);
$backend->conversationByIdentifier("voip-dcaeb62b29-20130327_081209")->firstModelRating()->setValue(0.4495219054613547);
$backend->conversationByIdentifier("voip-187c1708f2-20130325_131829")->firstModelRating()->setValue(0.6526106359333566);
$backend->conversationByIdentifier("voip-52eb280e7b-20130325_130950")->firstModelRating()->setValue(0.7717526541614073);
$backend->conversationByIdentifier("voip-6d6587c57d-20130328_143034")->firstModelRating()->setValue(0.3342319941638552);
$backend->conversationByIdentifier("voip-10beae627f-20130328_170907")->firstModelRating()->setValue(0.7707042004784462);
$backend->conversationByIdentifier("voip-36440f7305-20130327_195221")->firstModelRating()->setValue(0.06242052928471132);
$backend->conversationByIdentifier("voip-b6618de447-20130326_211551")->firstModelRating()->setValue(0.8063676829967368);
$backend->conversationByIdentifier("voip-2e134ee190-20130401_230615")->firstModelRating()->setValue(0.6140620204452318);
$backend->conversationByIdentifier("voip-aaa44b4121-20130327_170337")->firstModelRating()->setValue(0.7073064937333533);
$backend->conversationByIdentifier("voip-05e7a5440b-20130328_211839")->firstModelRating()->setValue(0.7228104018892956);
$backend->conversationByIdentifier("voip-ef9aa63b85-20130329_131544")->firstModelRating()->setValue(0.5385112501643649);
$backend->conversationByIdentifier("voip-583e7cede5-20130324_060002")->firstModelRating()->setValue(0.8088488588029138);
$backend->conversationByIdentifier("voip-2f4c700ae3-20130401_190613")->firstModelRating()->setValue(0.6575157078698881);
$backend->conversationByIdentifier("voip-ad40cf5489-20130327_192405")->firstModelRating()->setValue(0.677221373608544);
$backend->conversationByIdentifier("voip-2f209793f4-20130326_005104")->firstModelRating()->setValue(0.45862088807067075);
$backend->conversationByIdentifier("voip-d66e12b45c-20130327_172835")->firstModelRating()->setValue(0.1547316640709544);
$backend->conversationByIdentifier("voip-2d2d103292-20130329_041424")->firstModelRating()->setValue(0.7421626020162704);
$backend->conversationByIdentifier("voip-0fa32b1e78-20130328_152808")->firstModelRating()->setValue(0.7742991771458049);
$backend->conversationByIdentifier("voip-317a1436fe-20130325_172154")->firstModelRating()->setValue(0.7793261627352275);
$backend->conversationByIdentifier("voip-e54437a6f0-20130325_140347")->firstModelRating()->setValue(0.7184593494544337);
$backend->conversationByIdentifier("voip-22756d9e8f-20130329_050743")->firstModelRating()->setValue(0.8052246222564641);
$backend->conversationByIdentifier("voip-0241bbae39-20130327_190942")->firstModelRating()->setValue(0.7480358755802348);
$backend->conversationByIdentifier("voip-8d5173f3a6-20130324_184438")->firstModelRating()->setValue(0.5937144525844832);
$backend->conversationByIdentifier("voip-ec87351630-20130328_162752")->firstModelRating()->setValue(0.6970104420676808);
$backend->conversationByIdentifier("voip-be5b7bf9d9-20130401_154835")->firstModelRating()->setValue(0.7255297920687558);
$backend->conversationByIdentifier("voip-59bc8a2167-20130325_143706")->firstModelRating()->setValue(0.6886598649999633);
$backend->conversationByIdentifier("voip-dda7c88c6e-20130323_053057")->firstModelRating()->setValue(0.8224499311934252);
$backend->conversationByIdentifier("voip-88b68a9a41-20130322_221256")->firstModelRating()->setValue(0.7893029238458911);
$backend->conversationByIdentifier("voip-e61fa89add-20130326_011204")->firstModelRating()->setValue(0.7020516194575142);
$backend->conversationByIdentifier("voip-4c0d36762a-20130328_212300")->firstModelRating()->setValue(0.6991579140753705);
$backend->conversationByIdentifier("voip-50af5438f1-20130402_082750")->firstModelRating()->setValue(0.6603394284225172);
$backend->conversationByIdentifier("voip-21ec2b7850-20130325_162417")->firstModelRating()->setValue(0.4325470297995163);
$backend->conversationByIdentifier("voip-5a464ca603-20130401_170359")->firstModelRating()->setValue(0.7193885747132656);
$backend->conversationByIdentifier("voip-f1e8236264-20130323_004442")->firstModelRating()->setValue(0.8039034777166928);
$backend->conversationByIdentifier("voip-ef9aa63b85-20130328_211048")->firstModelRating()->setValue(0.7176277420621948);
$backend->conversationByIdentifier("voip-340dbb333e-20130327_011403")->firstModelRating()->setValue(0.6924533063193611);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130327_000138")->firstModelRating()->setValue(0.47759000907832533);
$backend->conversationByIdentifier("voip-dda7c88c6e-20130323_053928")->firstModelRating()->setValue(0.6267518504050729);
$backend->conversationByIdentifier("voip-e8997b10da-20130329_000534")->firstModelRating()->setValue(0.7279995397375338);
$backend->conversationByIdentifier("voip-4b7e22cc07-20130401_185640")->firstModelRating()->setValue(0.055455281844009066);
$backend->conversationByIdentifier("voip-52eb280e7b-20130325_124240")->firstModelRating()->setValue(0.5430054071473691);
$backend->conversationByIdentifier("voip-fbd422ad18-20130328_185340")->firstModelRating()->setValue(0.22177404597280384);
$backend->conversationByIdentifier("voip-bde2721237-20130326_195337")->firstModelRating()->setValue(0.6968016749318062);
$backend->conversationByIdentifier("voip-e72dba1759-20130326_223506")->firstModelRating()->setValue(0.7671315714682834);
$backend->conversationByIdentifier("voip-52eb280e7b-20130325_123856")->firstModelRating()->setValue(0.6636181340548938);
$backend->conversationByIdentifier("voip-e0035cc31b-20130323_210244")->firstModelRating()->setValue(0.7729220395945068);
$backend->conversationByIdentifier("voip-2d3d74d091-20130328_135311")->firstModelRating()->setValue(0.7738586832191986);
$backend->conversationByIdentifier("voip-03d6592b76-20130327_024630")->firstModelRating()->setValue(0.8616443997200898);
$backend->conversationByIdentifier("voip-7e22911804-20130325_202948")->firstModelRating()->setValue(0.7916788607925248);
$backend->conversationByIdentifier("voip-922209b777-20130327_013531")->firstModelRating()->setValue(0.6998278122388369);
$backend->conversationByIdentifier("voip-03c59ba692-20130324_034930")->firstModelRating()->setValue(0.7422553519121293);
$backend->conversationByIdentifier("voip-381a50592b-20130326_043646")->firstModelRating()->setValue(0.32365447927138347);
$backend->conversationByIdentifier("voip-4a6ecc1f1c-20130329_153643")->firstModelRating()->setValue(0.7037423159593077);
$backend->conversationByIdentifier("voip-39a25ab2f8-20130328_131901")->firstModelRating()->setValue(0.5390213371703126);
$backend->conversationByIdentifier("voip-31d9d1a567-20130402_035950")->firstModelRating()->setValue(0.7831704618706022);
$backend->conversationByIdentifier("voip-e99e4f4538-20130327_140746")->firstModelRating()->setValue(0.4511340892320759);
$backend->conversationByIdentifier("voip-e54437a6f0-20130326_195611")->firstModelRating()->setValue(0.3946522082765424);
$backend->conversationByIdentifier("voip-03c59ba692-20130325_183305")->firstModelRating()->setValue(0.6996044283838654);
$backend->conversationByIdentifier("voip-9f989824fd-20130324_074401")->firstModelRating()->setValue(0.656787408667177);
$backend->conversationByIdentifier("voip-199d62165b-20130402_120456")->firstModelRating()->setValue(0.8186184868583258);
$backend->conversationByIdentifier("voip-2d2d103292-20130328_195634")->firstModelRating()->setValue(0.7823428086217888);
$backend->conversationByIdentifier("voip-e72dba1759-20130325_204601")->firstModelRating()->setValue(0.7373284398911346);
$backend->conversationByIdentifier("voip-936ec6902a-20130328_133128")->firstModelRating()->setValue(0.6957106720557816);
$backend->conversationByIdentifier("voip-96f43326a4-20130323_071538")->firstModelRating()->setValue(0.659636847104112);
$backend->conversationByIdentifier("voip-922209b777-20130325_162222")->firstModelRating()->setValue(0.7805773974930417);
$backend->conversationByIdentifier("voip-2f4c700ae3-20130401_191934")->firstModelRating()->setValue(0.6471723818334119);
$backend->conversationByIdentifier("voip-3b81cbb287-20130324_022110")->firstModelRating()->setValue(0.6231107578831014);
$backend->conversationByIdentifier("voip-b6618de447-20130328_153132")->firstModelRating()->setValue(0.7873909552482236);
$backend->conversationByIdentifier("voip-a352cb5ca5-20130401_234216")->firstModelRating()->setValue(0.5539974335660524);
$backend->conversationByIdentifier("voip-5cf59cc660-20130328_143501")->firstModelRating()->setValue(0.7565088272248432);
$backend->conversationByIdentifier("voip-8d5173f3a6-20130324_183623")->firstModelRating()->setValue(0.5033340389625324);
$backend->conversationByIdentifier("voip-b20b6e847a-20130326_222030")->firstModelRating()->setValue(0.83543235749644);
$backend->conversationByIdentifier("voip-381a50592b-20130326_035922")->firstModelRating()->setValue(0.405945090974712);
$backend->conversationByIdentifier("voip-8d5173f3a6-20130324_184603")->firstModelRating()->setValue(0.469734302430487);
$backend->conversationByIdentifier("voip-0fa32b1e78-20130328_151336")->firstModelRating()->setValue(0.6209842798630535);
$backend->conversationByIdentifier("voip-72e50baa85-20130327_063159")->firstModelRating()->setValue(0.5957889665722049);
$backend->conversationByIdentifier("voip-a31ca3e355-20130323_223338")->firstModelRating()->setValue(0.5935216820444928);
$backend->conversationByIdentifier("voip-10beae627f-20130328_165245")->firstModelRating()->setValue(0.6935324371198016);
$backend->conversationByIdentifier("voip-36440f7305-20130327_200102")->firstModelRating()->setValue(0.33037374901690425);
$backend->conversationByIdentifier("voip-e9b53d6ace-20130401_184931")->firstModelRating()->setValue(0.8403056400545607);
$backend->conversationByIdentifier("voip-b27a230d2e-20130323_050830")->firstModelRating()->setValue(0.6642570271656851);
$backend->conversationByIdentifier("voip-90732b027d-20130328_164236")->firstModelRating()->setValue(0.6879055912020472);
$backend->conversationByIdentifier("voip-9735278861-20130401_154605")->firstModelRating()->setValue(0.7330300804114016);
$backend->conversationByIdentifier("voip-f22c2bf9c7-20130326_193956")->firstModelRating()->setValue(0.21026302158939666);
$backend->conversationByIdentifier("voip-da10d74c3e-20130328_142725")->firstModelRating()->setValue(0.4006487779128078);
$backend->conversationByIdentifier("voip-b6618de447-20130328_152908")->firstModelRating()->setValue(0.8071152217275079);
$backend->conversationByIdentifier("voip-5cf59cc660-20130328_143758")->firstModelRating()->setValue(0.6115283761815932);
$backend->conversationByIdentifier("voip-e72dba1759-20130326_221205")->firstModelRating()->setValue(0.5158094420770228);
$backend->conversationByIdentifier("voip-f22c2bf9c7-20130328_165410")->firstModelRating()->setValue(0.7687137748998678);
$backend->conversationByIdentifier("voip-f22c2bf9c7-20130328_115849")->firstModelRating()->setValue(0.23495364483767753);
$backend->conversationByIdentifier("voip-96f43326a4-20130323_072452")->firstModelRating()->setValue(0.4180472989270151);
$backend->conversationByIdentifier("voip-e2a895cfe5-20130326_233655")->firstModelRating()->setValue(0.3502033756764683);
$backend->conversationByIdentifier("voip-8f9fb7a86b-20130328_185140")->firstModelRating()->setValue(0.7219931195846836);
$backend->conversationByIdentifier("voip-3b3edac94d-20130326_003522")->firstModelRating()->setValue(0.6246443674286246);
$backend->conversationByIdentifier("voip-d7853a398f-20130402_161902")->firstModelRating()->setValue(0.7259878428004468);
$backend->conversationByIdentifier("voip-dd9f7810fd-20130322_231612")->firstModelRating()->setValue(0.7195820192552838);
$backend->conversationByIdentifier("voip-f091d0e461-20130327_211146")->firstModelRating()->setValue(0.7257479947392922);
$backend->conversationByIdentifier("voip-d645d56d23-20130324_000651")->firstModelRating()->setValue(0.5738937702010616);
$backend->conversationByIdentifier("voip-b27a230d2e-20130323_043046")->firstModelRating()->setValue(0.6465624123720378);
$backend->conversationByIdentifier("voip-d76f6e4f82-20130327_193247")->firstModelRating()->setValue(0.863316404581547);
$backend->conversationByIdentifier("voip-4c25da9a27-20130327_141855")->firstModelRating()->setValue(0.6655744448950814);
$backend->conversationByIdentifier("voip-4f069a4136-20130402_031309")->firstModelRating()->setValue(0.4441694771331786);
$backend->conversationByIdentifier("voip-ccf48b9a6a-20130329_041830")->firstModelRating()->setValue(0.38569089882417434);
$backend->conversationByIdentifier("voip-e8997b10da-20130401_151850")->firstModelRating()->setValue(0.7710009294926968);
$backend->conversationByIdentifier("voip-2f4c700ae3-20130401_190045")->firstModelRating()->setValue(0.6860995818395765);
$backend->conversationByIdentifier("voip-f113dbb0e1-20130327_173842")->firstModelRating()->setValue(0.5330252236864127);
$backend->conversationByIdentifier("voip-dd9f7810fd-20130322_224356")->firstModelRating()->setValue(0.808090370222935);
$backend->conversationByIdentifier("voip-7e22911804-20130328_204150")->firstModelRating()->setValue(0.4308169270495169);
$backend->conversationByIdentifier("voip-52eb280e7b-20130326_214342")->firstModelRating()->setValue(0.725052936166002);
$backend->conversationByIdentifier("voip-c8ec8c76dd-20130328_175715")->firstModelRating()->setValue(0.8364550372986322);
$backend->conversationByIdentifier("voip-03c2655d43-20130327_195308")->firstModelRating()->setValue(0.7448769881517414);
$backend->conversationByIdentifier("voip-db80a9e6df-20130328_230811")->firstModelRating()->setValue(0.7549171230991323);
$backend->conversationByIdentifier("voip-5a464ca603-20130401_192625")->firstModelRating()->setValue(0.5494113387819417);
$backend->conversationByIdentifier("voip-22756d9e8f-20130328_170312")->firstModelRating()->setValue(0.38110361180150776);
$backend->conversationByIdentifier("voip-ad40cf5489-20130327_192458")->firstModelRating()->setValue(0.5105843555341294);
$backend->conversationByIdentifier("voip-8991b7bff6-20130401_174811")->firstModelRating()->setValue(0.6380318219298793);
$backend->conversationByIdentifier("voip-00d76b791d-20130327_011609")->firstModelRating()->setValue(0.7272237935181155);
$backend->conversationByIdentifier("voip-2d2d103292-20130326_041959")->firstModelRating()->setValue(0.7670391986057945);
$backend->conversationByIdentifier("voip-e8997b10da-20130401_152019")->firstModelRating()->setValue(0.3596783090444158);
$backend->conversationByIdentifier("voip-fbd422ad18-20130328_184603")->firstModelRating()->setValue(0.7382286826148067);
$backend->conversationByIdentifier("voip-2f209793f4-20130326_005217")->firstModelRating()->setValue(0.6512740196983591);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_185855")->firstModelRating()->setValue(0.7029861924198996);
$backend->conversationByIdentifier("voip-03d6592b76-20130327_030034")->firstModelRating()->setValue(0.7384598921674839);
$backend->conversationByIdentifier("voip-22756d9e8f-20130329_043954")->firstModelRating()->setValue(0.8584165155422192);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_185114")->firstModelRating()->setValue(0.5731271800252621);
$backend->conversationByIdentifier("voip-be5b7bf9d9-20130402_201818")->firstModelRating()->setValue(0.7054507772629518);
$backend->conversationByIdentifier("voip-e9b53d6ace-20130401_205843")->firstModelRating()->setValue(0.7527957309002676);
$backend->conversationByIdentifier("voip-90732b027d-20130401_222446")->firstModelRating()->setValue(0.8202806745260034);
$backend->conversationByIdentifier("voip-199d62165b-20130402_122354")->firstModelRating()->setValue(0.7483186285621191);
$backend->conversationByIdentifier("voip-62cc0cc55d-20130323_161217")->firstModelRating()->setValue(0.48768873105036514);
$backend->conversationByIdentifier("voip-3be3bda933-20130327_015627")->firstModelRating()->setValue(0.6751424369515868);
$backend->conversationByIdentifier("voip-b57f8ee22b-20130326_234206")->firstModelRating()->setValue(0.6166338477444122);
$backend->conversationByIdentifier("voip-5a464ca603-20130401_193933")->firstModelRating()->setValue(0.5075301104665062);
$backend->conversationByIdentifier("voip-597cfafdee-20130402_011800")->firstModelRating()->setValue(0.7983692590467076);
$backend->conversationByIdentifier("voip-b6618de447-20130325_145518")->firstModelRating()->setValue(0.7668088741129069);
$backend->conversationByIdentifier("voip-88b68a9a41-20130324_004148")->firstModelRating()->setValue(0.532033680964032);
$backend->conversationByIdentifier("voip-7e07d8f0f5-20130328_192245")->firstModelRating()->setValue(0.44935963256865896);
$backend->conversationByIdentifier("voip-affbf578cf-20130401_163655")->firstModelRating()->setValue(0.744361139475781);
$backend->conversationByIdentifier("voip-f32f2cfdae-20130327_014457")->firstModelRating()->setValue(0.6973566116847887);
$backend->conversationByIdentifier("voip-0fa32b1e78-20130402_142351")->firstModelRating()->setValue(0.6941926680398718);
$backend->conversationByIdentifier("voip-155e939ebc-20130327_203543")->firstModelRating()->setValue(0.653493727979858);
$backend->conversationByIdentifier("voip-fe4b6ef58f-20130325_234625")->firstModelRating()->setValue(0.7242838278856297);
$backend->conversationByIdentifier("voip-ab4f1dbb59-20130328_180542")->firstModelRating()->setValue(0.8050657195858386);
$backend->conversationByIdentifier("voip-d6f8c4271e-20130326_220359")->firstModelRating()->setValue(0.7396517986185434);
$backend->conversationByIdentifier("voip-8d5173f3a6-20130324_183442")->firstModelRating()->setValue(0.7503956718124779);
$backend->conversationByIdentifier("voip-03d6592b76-20130326_012615")->firstModelRating()->setValue(0.724051918821301);
$backend->conversationByIdentifier("voip-db80a9e6df-20130328_230354")->firstModelRating()->setValue(0.6555411843296967);
$backend->conversationByIdentifier("voip-3cf7bd870d-20130327_174526")->firstModelRating()->setValue(0.8236612412779031);
$backend->conversationByIdentifier("voip-50af5438f1-20130402_090250")->firstModelRating()->setValue(0.5087040778940004);
$backend->conversationByIdentifier("voip-10beae627f-20130401_163556")->firstModelRating()->setValue(0.750398465331485);
$backend->conversationByIdentifier("voip-10beae627f-20130401_164239")->firstModelRating()->setValue(0.8559620055242729);
$backend->conversationByIdentifier("voip-2f209793f4-20130326_012033")->firstModelRating()->setValue(0.5533791854821472);
$backend->conversationByIdentifier("voip-4f069a4136-20130402_032149")->firstModelRating()->setValue(0.40842937249585287);
$backend->conversationByIdentifier("voip-4c0d36762a-20130328_205236")->firstModelRating()->setValue(0.36753392361686343);
$backend->conversationByIdentifier("voip-78f497f314-20130324_203101")->firstModelRating()->setValue(0.8214138025957748);
$backend->conversationByIdentifier("voip-03c2655d43-20130327_194616")->firstModelRating()->setValue(0.7070565242676236);
$backend->conversationByIdentifier("voip-58047f5227-20130327_032257")->firstModelRating()->setValue(0.7747468831843896);
$backend->conversationByIdentifier("voip-dd9f7810fd-20130322_223946")->firstModelRating()->setValue(0.7140442817493249);
$backend->conversationByIdentifier("voip-dcaeb62b29-20130326_043007")->firstModelRating()->setValue(0.10111926920993802);
$backend->conversationByIdentifier("voip-14f776f781-20130328_121622")->firstModelRating()->setValue(0.7839982961954751);
$backend->conversationByIdentifier("voip-e61fa89add-20130326_100409")->firstModelRating()->setValue(0.609236591129254);
$backend->conversationByIdentifier("voip-88b68a9a41-20130324_004639")->firstModelRating()->setValue(0.8388206135342792);

// $convs = array(
//     "voip-dda7c88c6e-20130323_053612",
//     "voip-2f209793f4-20130326_005104",
//     "voip-7e07d8f0f5-20130328_190850",
//     "voip-5749b16764-20130328_150400",
//     "voip-155e939ebc-20130327_203543",
//     "voip-10beae627f-20130401_164239"
//     );

// foreach ($convs as $c) echo $backend->conversationByIdentifier($c)->ID() . ', ';


// $conv = $backend->conversation(456);

// echo $conv->satisfiedAnnotators();

// foreach ($backend->conversations() as $c) 
// {
//     echo $c->ID() . '    ';
//     $c->runModelRating();
// }

// $conv = $backend->conversation(790);

// $conv->runModelRating(true);

// $backend->importZip('/home/david/Desktop/satmeuk1.zip');

// Load conversations from database
// $conversations = $backend->conversations();

// $conversations->orderByRuntime();

// $countsat = 0;
// $totalsat = 0;
// $countdsat = 0;
// $totaldsat = 0;


// foreach ($conversations as $c)
// {
//     if ($c->satisfied()) 
//     {
//         $countsat += 1;
//         $totalsat += $c->runtime();
//         echo "\033[1;32m";

//     }
//     else 
//     {
//         $countdsat += 1;
//         $totaldsat += $c->runtime();
//         echo "\033[1;31m";
//     }
    
//     // echo "{$c->identifier()}: {$c->runtime()}: ";
//     echo $c->averageModelRating();
//     echo "\033[0m";
//     echo PHP_EOL;
// }

// echo "Average running time for SAT: " . ($totalsat / $countsat) . PHP_EOL;
// echo "Average running time for dSAT: " . ($totaldsat / $countdsat) . PHP_EOL;

// // Filter on satisfied conversations
// $conversations->setSatisfied(true);

// // Show all identifiers
// foreach ($conversations as $c) echo $c->identifier() . PHP_EOL;