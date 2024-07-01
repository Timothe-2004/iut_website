import 'package:flutter/material.dart';

import 'package:http_projet/models/person_dart.dart';
import 'package:http_projet/common/responsive_widegt.dart';
import 'package:http_projet/pages/friend_list_page.dart';
import 'package:http_projet/pages/friend_page.dart';
import 'package:http_projet/pages/friend_form_page.dart';
class FriendListPage extends StatefulWidget {
  const FriendListPage({super.key});

  @override
  State<FriendListPage> createState() => _FriendListPageState();
}

class _FriendListPageState extends State<FriendListPage> {
  String name = "";
  bool liked = false;
  List<Person> persons = [];
  List<Person> friends = [];

  @override
  Widget build(BuildContext context) {
    return ResponsiveWidget(
      mobile: Scaffold(
        appBar: AppBar(
          title: Text("Friend App"),
          actions: [
            IconButton(
                onPressed: () async {
                  Person person = await Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (context) => FriendPage(
                          friends: friends,
                        ),
                      ));
                  print(person.name);
                  friends.remove(person);
                  setState(() {});
                },
                icon: Icon(Icons.check))
          ],
        ),
        body: ListView(
          children: persons
              .map((person) => ListTile(
                    title: Text("${person.name} ${person.surname}"),
                    subtitle: Text("Message"),
                    leading: CircleAvatar(
                      backgroundImage: NetworkImage(
                          "https://images.unsplash.com/photo-1568044852337-9bcc3378fc3c?q=80&w=3435&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"),
                    ),
                    trailing: Icon(
                      Icons.favorite,
                      color: checkIfExists(person) ? Colors.red : Colors.black,
                    ),
                    onTap: () {
                      addFriend(person);
                      setState(() {});
                    },
                  ))
              .toList(),
        ),
        floatingActionButton: FloatingActionButton(
          onPressed: () async {
            Person person = await Navigator.push(
              context,
              MaterialPageRoute(
                builder: (context) => FriendFormPage(),
              ),
            );

            setState(() => persons.add(person));
          },
          backgroundColor: Colors.blue, // Couleur bleue
          child: Icon(Icons.add),
        ),

      ),
    );
  }

  bool checkIfExists(Person person) {
    return friends.contains(person);
  }

  void addFriend(Person person) {
    if (!checkIfExists(person)) {
      friends.add(person);
    } else {
      friends.remove(person);
    }
  }
}
