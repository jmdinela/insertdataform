# Insert Data Form
<img src="image/Insert View.png">
1.Install the Xampp Download XAMPP (apachefriends.org)

2.Make a folder from Local Disk / xampp / htdocs

Folder Name: insertdata

3.Create Database
Database Name: insertdata
Table Name: tblcontact

```
CREATE TABLE `tblcontact` (
`contact_id` int(11) NOT NULL, 
`user_name` varchar(100) NOT NULL,
`user_email` varchar(255) NOT NULL,
`subject` varchar(255) NOT NULL,
`content` text NOT NULL
);
```

4.Create index.php on folder. Style the form vie and make a dbcon for myphpadmin.

5.Test the form.

6.Check the database if the data is inserted on the table.

