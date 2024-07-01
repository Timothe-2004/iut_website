import 'package:flutter/material.dart';

class ResponsiveWidget extends StatelessWidget {
  final Widget mobile;
  final Widget? tablet;
  final Widget? desktop;

  ResponsiveWidget({required this.mobile, this.tablet, this.desktop});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: LayoutBuilder(
        builder: (BuildContext context, BoxConstraints constraints) {
          print(constraints);
          if (constraints.maxWidth < 768) {
// Extra small devices (phones, 600px and down)

            return mobile;
          }
          if (constraints.maxWidth >= 768 && constraints.maxWidth < 992) {
            //Small devices (portrait tablets and large phones, 600px and up)
            return Container(
              child: tablet,
            );
          }
          if (constraints.maxWidth >= 992) {
            //desktop
            return Container(
              child: desktop,
            );
          }

          return Container();
        },
      ),
    );
  }
}
