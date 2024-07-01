class Person {
  String? name;
  String? surname;
  String? birthDate;
  String? sex;
  String? profil;
  Person? spouse;

  Person({this.name, this.surname, this.birthDate, this.sex});

  @override
  String toString() {
    return 'Person{name: $name, surname: $surname, birthDate: $birthDate, sex: $sex}';
  }
}
