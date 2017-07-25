<?php
// Copyright (C) 2013 Medical Information Integration, LLC
// 
// The first level key is the displayed category name, and the second
// level is the line_id for the database.  Be careful not to duplicate
// these IDs!

$pelines = array(
	'GEN' => array(
		'GEN001'  => xl('Alert and oriented x4'),
                'GEN002'  => xl('Distress'),
                'GEN003'  => xl('Well developed'),
                'GEN004'  => xl('Well nourished'),
                'GEN005'  => xl('Ill Appearing'),
                'GEN006'  => xl('Cachectic'),
                'GEN007'  => xl('Other Comments/Observations')),
	'HENT' => array(
		'EYE001'  => xl('Pupils equal, round, reactive to light, and accommodation'),
                'EYE002'  => xl('Extraocular movements intact'),
                'ENT003'  => xl('Oropharynx clear'),
		'ENT004'  => xl('Moist mucous membranes'),
		'ENT005'  => xl('Icterus'),
		'ENT006'  => xl('Erythema'),
		'ENT007'  => xl('Exudates'),
		'ENT008'  => xl('Lesions'),
                'ENT009'  => xl('Tympanic membranes'),
                'ENT010'  => xl('Turbinates'),
                'ENT011'  => xl('Other Comments/Observations')),
        'NECK' => array(
		'NECK001' => xl('Supple'),
                'NECK002' => xl('Full Range of Motion'),
                'NECK003' => xl('Rigidity'),
                'NECK004' => xl('Lymphadenopathy'),
                'NECK005' => xl('JVD'),
                'NECK006' => xl('Bruit'),
                'NECK007' => xl('Thyromegaly'),
                'NECK008' => xl('Thyroid Nodule'),
                'NECK009' => xl('Other Comments/Observations')),            
    	'LUNGS' => array(
		'LUNGS001' => xl('Clear to auscultation bilaterally'),
                'LUNGS002' => xl('Crackles'),
                'LUNGS003' => xl('Wheezes'),
                'LUNGS004' => xl('Rhonchi'),
                'LUNGS005' => xl('Egophony'),
                'LUNGS006' => xl('Bronchophony'),
                'LUNGS007' => xl('Dullness'),
                'LUNGS008' => xl('Other Comments/Observations')),            
    	'CARDIO' => array(
		'CARDIO001' => xl('S1, S2 normal'),
                'CARDIO002' => xl('Regular rate and rhythm'),
                'CARDIO003' => xl('Murmurs'),
                'CARDIO004' => xl('Rubs'),
                'CARDIO005' => xl('Gallops'),
                'CARDIO006' => xl('Other Comments/Observations')),
    	'ABDOMEN' => array(
		'ABDMN001' => xl('Soft'),
                'ABDMN002' => xl('Nontender'),
                'ABDMN003' => xl('Nondistended'),
                'ABDMN004' => xl('Bowel sounds'),
                'ABDMN005' => xl('Guarding'),
                'ABDMN006' => xl('Rebound'),
                'ABDMN007' => xl('Hepatosplenomegaly'),
                'ABDMN008' => xl('Other Comments/Observations')),
            'GU' => array(
		'GU001' => xl('Bilateral descended testes'),
                'GU002' => xl('Masses'),
                'GU003' => xl('Phallus'),
                'GU004' => xl('Scrotal edema'),
                'GU005' => xl('Other Comments/Observations')),
    	'RECTAL' => array(
		'REC001' => xl('GUIAC'),
                'REC002' => xl('Brown Stool'),
                'REC003' => xl('Sphincter Tone'),
                'REC004' => xl('Other Comments/Observations')),
    	'EXTREMITIES' => array(
		'EXT001' => xl('Clubbing'),
                'EXT002' => xl('Cyanosis'),
                'EXT003' => xl('Edema'),
                'EXT004' => xl('Ulcers'),
                'EXT005' => xl('Pulses'),
                'EXT006' => xl('Other Comments/Observations')),
    	'SKIN' => array(
		'SKIN001' => xl('Rash'),
                'SKIN002' => xl('Other Comments/Observations')),
        'MS' => array(
		'MS001' => xl('Full range of motion'),
                'MS002' => xl('Tender'),
                'MS003' => xl('Effusion'),
                'MS004' => xl('Deformity under joint(s)'),
                'MS005' => xl('Crepitus'),
                'MS006' => xl('Other Comments/Observations')),
	'NEURO' => array(
		'NEURO001' => xl('Cranial nerves II through XII grossly intact'),
                'NEURO002' => xl('Muscle strength 5 out of 5 in all four extremities'),
                'NEURO003' => xl('Focal deficits'),
		'NEURO004' => xl('Alert and oriented x 3'),
		'NEURO005' => xl('Strength'),
		'NEURO006' => xl('Sensation'),
		'NEURO007' => xl('Deep Tendon Reflexes'),
		'NEURO008' => xl('Primitive Reflexes'),
                'NEURO009' => xl('Sedated'),
                'NEURO010' => xl('Other Comments/Observations')),
	'OTHER' => array(
		'OTHER001' => xl('Additional Comments'))
);
?>