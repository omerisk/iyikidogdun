from _typeshed import Self


class İnsan:

    def __init__(self,ad,soyad,yas,cinsiyet):

     self.ad = ad 
     self.soyad=soyad
     self.yas = yas
     self.cinsiyet=cinsiyet

    def adiniEkranayaz(self):
        print(self.ad)
        print(self.soyad)
        print(self.yas)
        print(self.cinsiyet)

