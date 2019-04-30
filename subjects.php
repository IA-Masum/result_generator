<?php

function getSubName($code){
  switch ($code) {
    case 111:
      return "Religion (Islam)";
    
    case 112:
      return "Religion (Hinu)";
    
    case 113:
      return "Religion (Buddhist)";
    
    case 114:
      return "Religion (Christian)";
    
    case 136:
      return "Physics";
    
    case 153:
      return "Hisotry & Culture";
    
    case 152:
      return "Finance & Banking";
    
    case 137:
      return "Chemistry";
    
    case 140:
      return "Civics & Citizenship";
    
    case 151:
      return "Home Economics";
    
    case 134:
      return "Agreculture";
    
    case 149:
      return "Singing";
    
    case 138:
      return "Biology";
    
    case 141:
      return "Economics";
    
    case 150:
      return "BDGS";
    
    case 127:
      return "General Science";
    
    case 126:
      return "Heigher Math";
    
    case 110:
      return "Geography";
    
    case 146:
      return "Accounting";
    
    default:
      return "None";
  }
}
