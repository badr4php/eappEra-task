# eappEra-task

#instllation
- clone the project 
```git clone  git@github.com:badr4php/eappEra-task.git```
- set databae credintial in ``` config/database.php ```
- import ``` eappEra.sql ``` file to you DB



#Test login Api
- login uri ```/index.php/api/auth/login ``` 
- payload ``` {"email":"email@gmail.com", "password":"password"}```
- Http request method ``` POST```


#Test Posts Api
- create post url is ``` index.php/api/posts/store```
- create post payload ```{"title":"title", "content":"content", "usre_id":1} ```
- Http request method ``` POST```
- list posts url is ``` index.php/api/posts```
-Http request method ``` GET```
