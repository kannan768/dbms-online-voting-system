# dbms-online-voting-system
FUNCTIONS:
VOTER:
    In the voter function the user is logged in by using the voterID and password. If the password for the user is correct then he is allowed to vote otherwise he is not. By using session the previously given voterID in the login is obtained and the voter is allowed to caste his/her vote. He/she need to give the symbolID that they need to vote and the vote is added, repeated voters can’t vote.


ELECTION COMMISSION:
     In election commission there are 3 modules:
         Voter module, Candidate module , Vote Status.
         
Voter module:

     In this module the election commission allows to add a voter , display the voter details , update a voter using triggers, if a voter is updated then the old voter information is stored in the voter history table and we can display it.
     
     
Candidate module:
    In this module the election commission allows to add a candidate , display the candidate details , update a candidate, using triggers if a candidate is updated then the old candidate information is stored in the candidate history table and we can display it.
    
    
Vote status module:
    In this module there is a function Over-all votes using inner join between the tables the over all maximum of the parties are displayed. Then in Vote status of each voter displays the votes casted by each voter to which candidate and symbol is displayed by using inner join , In the Votes for each candidate the number of votes got by each candidate is displayed by using inner joins. Finally, the Areawise results is obtained as the maximum votes taken by the candidate at that location is displayed by using inner joins. 
