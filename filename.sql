		Create database registration;
		Use registration;
		Create table users(
        id Primary	int(50)		AUTO_INCREMENT

		firstname	varchar(50)	not null,

		lastname	varchar(50)	not null,

		email	varchar(50)	not null,

		password	varchar(50)	not null,

    	phoneno	varchar(14)	not null,

		gender	text	not null,	

		country	text	not null,	

		date	datetime(6)	
		);			

