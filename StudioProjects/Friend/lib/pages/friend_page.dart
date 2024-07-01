import 'package:flutter/material.dart';

import '../models/person_dart.dart';

class FriendPage extends StatelessWidget {
  final List<Person> friends;

  FriendPage({super.key, required this.friends});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("My Friends"),
      ),

      body: ListView(
        children: friends.map((person) => ListTile(
          title: Text("${person.name} ${person.surname}"),
          subtitle: Text("Amis"),
          leading: CircleAvatar(
            backgroundImage: NetworkImage(
                "https://images.unsplash.com/photo-1568044852337-9bcc3378fc3c?q=80&w=3435&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"),
          ),
          onTap: () => Navigator.pop(context, person),

      )).toList(),
    )
    );
  }
}
