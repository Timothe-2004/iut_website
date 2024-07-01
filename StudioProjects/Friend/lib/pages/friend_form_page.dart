import 'package:flutter/material.dart';
import 'package:http_projet/models/person_dart.dart';
import 'package:http_projet/common/i_input.dart';
import 'package:http_projet/common/I_button.dart';

class FriendFormPage extends StatefulWidget {
  const FriendFormPage({Key? key});

  @override
  State<FriendFormPage> createState() => _FriendFormPageState();
}

class _FriendFormPageState extends State<FriendFormPage> {
  final _formKey = GlobalKey<FormState>();
  final Person person = Person();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Ajout d'ami"),
      ),
      body: Container(
        padding: EdgeInsets.all(10),
        child: Form(
          key: _formKey,
          child: ListView(
            children: [
              IIinput(
                name: 'Nom',
                validator: (value) {
                  if (value!.isEmpty) {
                    return "Champ obligatoire";
                  }
                },
                onSaved: (value) {
                  person.name = value;
                },
                prefixIcon: Icon(Icons.person),
                suffixIcon: Icon(Icons.access_time_filled),
              ),
              SizedBox(height: 10),
              IIinput(
                name: 'Prénom',
                validator: (value) {
                  if (value!.isEmpty) {
                    return "Champ obligatoire";
                  }
                },
                onSaved: (value) {
                  person.surname = value;
                },
                prefixIcon: Icon(Icons.person),
                suffixIcon: Icon(Icons.access_time_filled),
              ),
              SizedBox(height: 10),

              SizedBox(height: 10),
            ],
          ),
        ),
      ),
      bottomNavigationBar: BottomAppBar(
        child: IButton(
          onPressed: () async {
            if (_formKey.currentState!.validate()) {
              _formKey.currentState!.save();
            }
            Navigator.pop(context, person);
          },
          text: 'Ajouter',
        ),
      ),
    );
  }
}
