# Generated by Django 3.2 on 2021-04-25 15:47

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='donate',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('Book_name', models.CharField(max_length=200)),
                ('Book_author', models.CharField(max_length=200)),
                ('Doner_name', models.CharField(max_length=200)),
                ('Doner_phone', models.IntegerField()),
                ('Image', models.ImageField(upload_to='images')),
                ('Book_status', models.BooleanField(default=1)),
            ],
        ),
        migrations.CreateModel(
            name='rent',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('Book_Id', models.IntegerField()),
                ('User_Id', models.IntegerField()),
            ],
        ),
    ]
