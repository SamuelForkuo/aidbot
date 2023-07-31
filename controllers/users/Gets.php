<?php
namespace Controllers\Users;

use Controllers\Controller;



class Gets extends Controller {

    public $aids = array(
        "Cardiopulmonary Resuscitation (CPR)",
        "Choking and Heimlich Maneuver",
        "Basic Wound Care",
        "Treating Burns and Scalds",
        "Anaphylaxis and Allergic Reactions",
        "Fractures and Sprains",
        "Head Injuries and Concussions",
        "Nosebleeds and How to Stop Them",
        "Eye Injuries and Irritations",
        "Insect Bites and Stings",
        "Snake Bites: Identification and Treatment",
        "Heat Exhaustion and Heatstroke",
        "Hypothermia: Recognizing and Responding",
        "Seizures and Epileptic Emergencies",
        "Stroke: FAST Assessment and Response",
        "Heart Attack Warning Signs and Actions",
        "Diabetic Emergencies",
        "Drowning and Water Safety",
        "Treating Electric Shocks",
        "Fainting and Vasovagal Syncope",
        "Frostbite and Frostnip",
        "Treating Allergic Reactions to Food",
        "Bites from Animals: Rabies Risk and Care",
        "First Aid for Cuts and Lacerations",
        "Sprains and Strains: RICE Method",
        "Allergic Reactions to Insect Stings",
        "Treating Jellyfish Stings",
        "Poisoning and Overdose Management",
        "First Aid for Eye Contusions",
        "Caring for Blistered Skin",
        "Bites and Stings from Spiders",
        "Recognizing Signs of Sepsis",
        "First Aid for Severe Bleeding",
        "Allergic Reactions to Medications",
        "Hypoglycemia (Low Blood Sugar) Treatment",
        "First Aid for Impaled Objects",
        "Asthma Attacks: Quick Relief Measures",
        "Treating Chemical Burns",
        "Recognizing Signs of Shock",
        "First Aid for Heart Palpitations"
    );

    function home() {
        return $this->view->render('pages/users/index.html', 
        [
            'aids' => array(
                "Cardiopulmonary Resuscitation (CPR)",
                "Choking and Heimlich Maneuver",
                "Basic Wound Care",
                "Treating Burns and Scalds",
                "Anaphylaxis and Allergic Reactions",
                "Fractures and Sprains",
                "Head Injuries and Concussions",
                "Nosebleeds and How to Stop Them",
                "Eye Injuries and Irritations",
                "Insect Bites and Stings",
            )
            
        ]);
    }

    function aids() {
        return $this->view->render('pages/users/aids.html', 
        [
            'aids' => $this->aids
        ]);
    }

    function contact() {
        return $this->view->render('pages/users/contact.html');
    }

    function admin() {
        return $this->view->render('pages/admin/dashboard.html', 
        [
            'aids' => $this->aids
        ]);
    }

    function login() {
        return $this->view->render('pages/admin/login.html');
    }

    function newAid() {
        return $this->view->render('pages/admin/newaid.html', 
        [
            'aids' => $this->aids
        ]);
    }

    
}



