## Cyber Night in Ljubljana: Snapping Securely

A Reveal.js Presentation Outline for 15-18 Year Olds

This outline uses a simplified analogy of sending a Snap to explain cybersecurity concepts.

**Intro Slide (Title Slide)**

* Title: Snapping Securely: A Journey of Your Snap from Ljubljana to Snapchat
* Subtitle: Cyber Night in Ljubljana
* Your Name/Affiliation
* Image: A stylized snap graphic with a Ljubljana landmark in the background.

**Slide 2: The Snap's Journey Begins**

* Title: From Your Phone to the World
* Content:  Imagine you're sending a snap to your friend.  It seems simple, right?  But there's a whole lot happening behind the scenes to make that magic happen.  Let's follow your snap's journey.
* Image: A phone with a snap graphic about to be sent.

**Slide 3: Finding Snapchat - DNS**

* Title:  Where's Snapchat? Asking DNS
* Content: Your phone first needs to find Snapchat. It does this by asking a service called DNS (Domain Name System). Think of DNS like the internet's phone book. It translates the name "snapchat.com" into an IP address – a numerical code that identifies Snapchat's servers.
* Cybersecurity point:  What if someone messes with the phone book?  DNS poisoning can redirect you to a fake Snapchat, stealing your login details.
* Image: A graphic depicting a phone querying a DNS server.

**Slide 4: Connecting to Snapchat - TCP/IP**

* Title: Making the Connection - TCP/IP
* Content: Once your phone knows where Snapchat is, it establishes a connection using something called TCP/IP. This is like setting up a phone call with Snapchat's servers.
* Cybersecurity point: What if someone eavesdrops on your call?  Unencrypted connections can allow others to see your data.  That's why HTTPS (secure connections) are so important.
* Image: A graphic showing a connection being established between a phone and a server.

**Slide 5: Sending the Snap - APIs**

* Title: Uploading Your Snap - Talking to the API
* Content:  Your phone uses Snapchat's API (Application Programming Interface) to upload the snap.  Think of an API as a messenger that delivers your snap and receives instructions back from Snapchat.
* Cybersecurity point:  APIs can be vulnerable to attacks.  Hackers might try to exploit flaws in the API to access your data or even control your account.
* Image:  A graphic representing data being uploaded via an API.

**Slide 6: Snapchat Stores Your Snap - Data Storage**

* Title: Where Does Your Snap Go? - Data Storage
* Content: Snapchat stores your snap on its servers. They use huge data centers to keep everything running.
* Cybersecurity point:  Data breaches happen.  Companies like Snapchat invest heavily in security, but no system is foolproof. Your data could be at risk if their servers are compromised.
* Image: A graphic of a data center.

**Slide 7: Your Friend Receives the Snap**

* Title: Snap Delivered!
* Content:  Snapchat sends your snap to your friend’s phone, and they can finally see it! The whole process happens in milliseconds.
* Image:  Two phones connected with a snap graphic being transferred.

**Slide 8: Staying Safe Online - Best Practices**

* Title: Protect Your Snaps – and Yourself!
* Content:  Simple steps like strong passwords, being cautious about what you share, and keeping your apps updated can greatly improve your online safety.
* Bullet points:
    * Use strong, unique passwords.
    * Be mindful of what you share online.
    * Keep your apps and software updated.
    * Enable two-factor authentication.
    * Be wary of suspicious links and emails.

**Slide 9:  Q&A**

* Title: Questions?
* Content: Open the floor for questions.


**Reveal.js Implementation Notes:**

* Use transitions and animations to make the presentation engaging.
* Include visual aids to illustrate complex concepts.
* Keep the language simple and avoid jargon.
*  Use interactive elements like quizzes or polls if possible.
*  Consider adding a short demonstration or video to further illustrate the concepts.


This outline provides a basic framework. You can adapt it to your specific needs and add more details based on the time allotted for your talk.  Remember to tailor the content to your audience's age and interests. Good luck with your presentation!


Here are some ideas for related topics you could discuss during your Cyber Night in Ljubljana presentation, keeping in mind a basic level of understanding for 15-18 year olds:

**Expanding on existing themes:**

* **Phishing:** Explain how phishing attacks work and how to spot them. Use real-world examples of phishing emails or messages related to social media.  This ties into the DNS and API security aspects.
* **Malware:** Briefly discuss different types of malware (viruses, spyware, ransomware) and how they can infect devices. Connect this to the importance of keeping software updated and being cautious about downloads.
* **Social Engineering:** Explain how attackers manipulate people into giving up information or performing actions that compromise security.  Relate this to phishing and online scams.
* **Password Security:**  Go beyond "strong passwords" and explain why password managers are useful and how multi-factor authentication adds an extra layer of protection.  This reinforces the API and data storage security discussion.
* **Privacy Concerns:** Discuss the implications of sharing personal information online and how companies collect and use their data.  This links to the data storage section.

**New related topics:**

* **Cyberbullying and Online Harassment:**  Discuss the different forms cyberbullying can take and how to deal with it.  Emphasize the importance of responsible online behavior and reporting mechanisms.
* **Fake News and Misinformation:**  Explain how misinformation spreads online and how to identify unreliable sources.  This is crucial for media literacy in the digital age.
* **Digital Footprint:**  Talk about the lasting impact of online activity and how to manage one's digital footprint. This can be relevant to future job prospects and online reputation.
* **Online Gaming Security:**  If your audience is into gaming, discuss the specific security risks related to online gaming, such as account theft and in-game fraud.
* **IoT and Smart Devices:** Briefly introduce the concept of the Internet of Things (IoT) and the potential security vulnerabilities of connected devices.

**Engaging Activities:**

* **Interactive Quiz:**  Include a short quiz throughout the presentation to test their understanding of the concepts.
* **Live Demonstrations (if possible):** Demonstrate a simple phishing attack or show how a password manager works.
* **Case Studies:**  Use real-world examples of cyberattacks or data breaches to illustrate the impact of cybersecurity incidents.
* **Local Angle:**  Mention any recent cybersecurity incidents in Slovenia or Europe to make the topic more relevant to your audience.


Remember to keep the tone engaging and avoid overwhelming your audience with technical details.  Focus on practical tips and advice they can use to stay safe online.  By relating the concepts to their everyday online activities, like using Snapchat, you can make cybersecurity more relatable and less intimidating.


You're right, focusing on the TLS handshake process after obtaining the Snapchat API's IP address offers a great opportunity to delve a bit deeper into practical cybersecurity within the context of sending a Snap. Here's a breakdown of what can go wrong during the TLS handshake and how you can explain it to your audience:

**What is TLS and why is it important?**

Explain that TLS (Transport Layer Security) is like creating a secure tunnel between your phone and Snapchat's server.  It encrypts the data being sent back and forth, preventing eavesdropping and tampering.  It's what makes the "S" in "HTTPS."

**What can go wrong during the TLS handshake?**

* **Outdated or vulnerable TLS versions:**  Older TLS versions have known weaknesses that attackers can exploit. If either your phone or Snapchat's server is using an outdated TLS version, the connection might be vulnerable.
    * *Explanation for your audience:* Imagine the secure tunnel having thin walls. Someone could potentially break through and see what's inside.
* **Expired or invalid certificates:**  TLS relies on digital certificates to verify the identity of the server. If the certificate is expired, revoked, or issued by an untrusted authority, the connection might be insecure.
    * *Explanation for your audience:* It's like showing a fake ID. Your phone can't be sure it's actually talking to Snapchat.
* **Man-in-the-Middle (MitM) attacks:**  An attacker could intercept the communication between your phone and Snapchat's server, posing as both parties. This allows them to eavesdrop on the conversation and potentially modify the data.
    * *Explanation for your audience:* Imagine someone standing in the middle of your conversation, relaying messages but secretly listening in and changing some of them.
* **Weak cipher suites:**  TLS uses different encryption algorithms (cipher suites).  If a weak cipher suite is negotiated, the connection might be easier to break.
    * *Explanation for your audience:* This is like using a simple lock that's easy to pick instead of a strong, complex one.
* **Implementation flaws:** Errors in the software implementing TLS on either the phone or the server can create vulnerabilities.
    * *Explanation for your audience:* Imagine a crack in the secure tunnel due to a construction error.

**How to explain this to 15-18 year olds:**

* **Keep it simple:** Use analogies and avoid technical jargon.
* **Relate it to their experience:**  Explain how these vulnerabilities could affect them directly, such as having their Snapchat account hacked or their messages intercepted.
* **Focus on the practical implications:**  Instead of going into the technical details of cryptography, emphasize the importance of keeping their apps and operating systems updated to patch these vulnerabilities.
* **Interactive elements:**  Consider a visual representation of the TLS handshake process or a short quiz to test their understanding.

By focusing on the TLS handshake within the context of sending a Snap, you can provide a concrete example of how cybersecurity concepts apply to their everyday lives. This makes the information more engaging and memorable.

You're spot on! Authentication and authorization are critical steps after the secure channel is established.  Here's what can go wrong at this stage and how to explain it to your audience:

**Authentication:**  This is the process of verifying *who you are*.

* **Weak passwords:** If you use a simple, easily guessable password, an attacker might be able to gain access to your account through brute-force attacks or by finding your password in a data breach.
    * *Explanation for your audience:*  It's like having a flimsy lock on your front door. Anyone could easily break in.
* **Credential stuffing:** Attackers use stolen usernames and passwords from other websites to try and access your Snapchat account.  This works because many people reuse the same passwords across multiple platforms.
    * *Explanation for your audience:* Imagine someone finding your house key under the doormat and trying to use it to unlock your car as well.
* **Phishing:**  Attackers might trick you into entering your username and password on a fake Snapchat login page.
    * *Explanation for your audience:* This is like someone building a replica of your house and tricking you into giving them the key.
* **Vulnerabilities in the authentication system:**  Flaws in Snapchat's authentication system could allow attackers to bypass the login process altogether.
    * *Explanation for your audience:* This is like a secret backdoor into your house that bypasses the lock entirely.

**Authorization:** This is the process of verifying *what you are allowed to do*.

* **Insufficient authorization checks:** If Snapchat's servers don't properly check your permissions, you might be able to access data or perform actions that you shouldn't be able to.
    * *Explanation for your audience:* Imagine being able to walk into any room in a building, even if you're only supposed to be in one specific office.
* **Privilege escalation:** An attacker might exploit a vulnerability to gain higher-level privileges than they should have. For example, a regular user might be able to gain administrative access.
    * *Explanation for your audience:* Imagine starting as a visitor in a building and somehow managing to get the master key that unlocks every room.
* **Broken object level authorization (BOLA):**  This is a more technical vulnerability where an application incorrectly restricts access to specific objects or data. For example, if you can access someone else's Snaps just by changing the URL.
    * *Explanation for your audience:*  Imagine being able to open anyone's locker at school just by changing the number on the dial.

**How to explain this to your audience:**

* **Use real-world analogies:**  Relate these concepts to everyday situations they can understand, like locks and keys, or access to different areas of a building.
* **Focus on prevention:**  Emphasize the importance of strong, unique passwords, two-factor authentication, and being cautious of phishing attempts.
* **Interactive examples:**  You could create a scenario where students try to guess weak passwords or demonstrate a simple phishing attack.
* **Keep it relevant:**  Explain how these vulnerabilities could lead to their Snapchat account being compromised, their data being stolen, or their privacy being violated.


By explaining authentication and authorization in a clear and relatable way, you can help your audience understand the importance of these security measures and how they can protect themselves online.
