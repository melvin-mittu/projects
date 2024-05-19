from django.db import models

# Create your models here.
class emply(models.Model):
   name=models.CharField(max_length=255)
   age=models.IntegerField()
   phone=models.IntegerField()
   experience=models.IntegerField()
   image = models.ImageField(upload_to="image/", null=True)
   