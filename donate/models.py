from django.db import models

# Create your models here.
class donater(models.Model):
 Book_name=models.CharField(max_length=200)
 Book_author=models.CharField(max_length=200)
 Doner_name=models.CharField(max_length=200)
 Doner_phone=models.IntegerField()
 Doner_address=models.CharField(max_length=200)
 Image=models.ImageField(upload_to='images')
 Book_status=models.BooleanField(default=1)

class rent(models.Model):
 Book_Id=models.IntegerField()
 User_Id=models.IntegerField()
 