from django.db import models # type: ignore
class User(models.Model):
    username = models.CharField(max_length=100)
    def __str__(self):
        return self.username