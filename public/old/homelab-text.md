---
marp: true
theme: foobar
size: 16:9
class:
  - lead
  - invert
paginate: true
---

# Introduction to Self-Hosting

## What is Self-Hosting?

Self-hosting refers to the practice of running and maintaining your own services on hardware that you own and control. This approach stands in contrast to relying on services provided by large tech companies, giving users more control over their data and digital lives.

---

## The Rise of Self-Hosting

In recent years, self-hosting has gained popularity as a response to growing concerns about data privacy, corporate control, and the centralization of internet services. It represents a return to the early days of the internet, where individuals and small groups maintained their own online presence.

---

## Why Self-Host?

There are several compelling reasons to consider self-hosting:

- Reduce reliance on "big tech" companies
- Solve personal problems with customized solutions
- Learn new technologies hands-on
- Enjoy it as a hobby and for experimentation
- Gain greater control over your data and privacy

---

# Getting Started with Self-Hosting

## Step 0: Find a Problem to Solve

Before diving into self-hosting, it's crucial to identify a specific need or problem you want to address. This could be:

- Home automation and smart home management
- Secure file storage and backups
- Personal media streaming
- Password management
- Project management and collaboration tools

---

## Step 1: Choose a Hosting Location

Selecting the right hosting location is a critical decision. Options include:

- Cloud virtual machines (e.g., DigitalOcean, Linode)
- Old laptop or desktop PC
- Tiny desktop PC or single-board computer (e.g., Raspberry Pi)
- Second-hand rack-mounted server

Each option has its pros and cons in terms of cost, performance, and maintenance requirements.

---

## Step 2: Consider Your Environment

When setting up a self-hosted system, it's important to evaluate your environment:

- Home internet connection quality and stability
- Available physical space for hardware
- Noise tolerance (some servers can be loud)
- Power consumption and its impact on electricity bills
- Climate control requirements to prevent overheating

---

## Step 3: Evaluate Costs

Self-hosting comes with various costs that should be carefully considered:

- Initial hardware investment
- Recurring costs (electricity, maintenance, upgrades)
- Potential savings from replaced commercial services
- Time investment for setup and ongoing management

It's important to weigh these costs against the benefits to determine if self-hosting is right for you.

---

# Popular Self-Hosted Services

## Home Automation

Home automation is a popular use case for self-hosting. Some key platforms include:

- HomeAssistant: A powerful, open-source home automation platform
- OpenHAB: Vendor and technology-agnostic home automation software
- Domoticz: Another open-source home automation system

These platforms allow you to control smart devices, create automation rules, and monitor your home environment.

---

## File Storage and Syncing

Secure and private file storage is a common reason people turn to self-hosting. Popular options include:

- Nextcloud: A comprehensive file hosting and collaboration platform
- Seafile: Focused on file syncing and sharing
- Syncthing: A decentralized file synchronization tool

These solutions offer alternatives to commercial cloud storage services, giving you full control over your data.

---

## Media Streaming

Self-hosted media streaming allows you to build your own personal Netflix. Key platforms include:

- Jellyfin: A fully open-source media streaming solution
- Plex: A polished media server with both free and paid tiers
- Emby: Another feature-rich media streaming platform

These services allow you to stream your personal media collection to various devices, both at home and remotely.

---

# Hardware Options for Self-Hosting

## DIY Server Builds

For maximum flexibility and power, many self-hosters opt to build their own servers:

- Custom-built PCs: Allows for precise specification of components
- Repurposed old hardware: A cost-effective way to start self-hosting
- Rack-mounted servers: For those with more advanced needs or space constraints

Building your own server gives you complete control over the hardware and allows for easy upgrades.

---

## Mini PCs

Mini PCs provide more power than single-board computers while maintaining a small footprint:

- Intel NUC: A popular line of small form-factor PCs
- Lenovo ThinkCentre Tiny: Compact business-class computers
- HP EliteDesk Mini: Another series of small, powerful PCs

These devices offer a good balance of performance and energy efficiency for home servers.

---

## NAS Devices

Network-Attached Storage (NAS) devices are purpose-built for file storage and sharing:

- Synology: Known for user-friendly interfaces and robust features
- QNAP: Offers a wide range of models for different needs
- TerraMaster: A more budget-friendly option with good performance

NAS devices often come with built-in apps for various self-hosting tasks beyond just file storage.

---

## Single-Board Computers

Single-board computers offer a low-cost, energy-efficient option for self-hosting:

- Raspberry Pi: The most popular and well-supported option
- ODROID: Offers more powerful alternatives to the Raspberry Pi
- Rock Pi: Another series of single-board computers with various capabilities

These devices are great for beginners and for hosting less resource-intensive services.

---

# Software and Operating Systems

## Server Operating Systems

Choosing the right operating system is crucial for your self-hosted setup:

- XCP-NG: A popular use of the Xen kernel and Citrix alternative.
- Debian: Known for its stability and extensive software repositories
- Proxmox VE: A specialized OS for virtualization and container management

These operating systems provide a solid foundation for running various self-hosted services.

---

## Containerization

Containerization technologies have revolutionized self-hosting:

- Docker: The most popular containerization platform
- Kubernetes: For advanced users managing complex, distributed systems
- LXC/LXD: Lightweight system containers

Containers allow for easy deployment and isolation of services, simplifying management and improving security.

---

## Web Servers

Web servers are essential for hosting web applications and services:

- Nginx: Known for its high performance and low resource usage
- HAProxy: Forward and reverse proxy for TCP and HTTP-based applications
- Caddy: A modern, easy-to-configure web server with automatic HTTPS

Choosing the right web server depends on your specific needs and the applications you're hosting.

---

# Security Considerations

## Network Security

Protecting your self-hosted services from unauthorized access is crucial:

- Firewalls: Configure to allow only necessary incoming connections
- VPNs: Use for secure remote access to your home network
- Reverse proxies: Provide an additional layer of security for web services

Implementing these measures helps safeguard your services and data from potential threats.

---

## Access Control

Proper access control is essential for maintaining the security of your self-hosted services:

- Strong passwords: Use unique, complex passwords for all services
- Two-factor authentication: Implement wherever possible
- SSH key-based authentication: For secure remote access to your server

These practices significantly reduce the risk of unauthorized access to your systems.

---

## Regular Updates

Keeping your systems up-to-date is critical for security:

- Automated security patches: Configure automatic updates for critical security fixes
- Keeping software up-to-date: Regularly update all self-hosted applications
- Monitoring for vulnerabilities: Stay informed about potential security issues in your software

Regular updates help protect against known vulnerabilities and ensure you have the latest features and improvements.

---

# Backup Strategies

## Local Backups

Local backups are your first line of defense against data loss:

- External hard drives: Simple and cost-effective for smaller setups
- Network-attached storage (NAS): Ideal for larger amounts of data
- RAID configurations: Provide redundancy against drive failures

Implement a combination of these methods for comprehensive local backup coverage.

---

## Off-site Backups

Off-site backups protect against catastrophic local events:

- Cloud storage providers: Use encrypted backups with services like Backblaze or Amazon S3
- Physical backups at a different location: Store hard drives or tapes off-site
- Encrypted backups: Ensure all off-site data is encrypted for privacy

Off-site backups are crucial for protecting against theft, fire, or natural disasters that could affect your local setup.

---

## Backup Software

Reliable backup software is essential for managing your backup strategy:

- Duplicati: Open-source backup software with encryption and cloud storage support
- Restic: A fast and secure backup program
- Borg Backup: Deduplicating archiver with compression and encryption

These tools can automate your backup processes and ensure your data is consistently protected.

---

# Monitoring and Maintenance

## System Monitoring

Monitoring is crucial for maintaining the health of your self-hosted services:

- Grafana: Create customizable dashboards for visualizing system metrics
- Prometheus: A powerful monitoring system and time series database
- Netdata: Real-time performance and health monitoring

These tools help you identify issues before they become critical and optimize your system's performance.

---

## Log Management

Effective log management is essential for troubleshooting and security:

- ELK Stack (Elasticsearch, Logstash, Kibana): A comprehensive log analysis solution
- Graylog: Centralized log management for both small setups and large enterprises
- Loki: A lightweight log aggregation system designed to work with Grafana

Proper log management helps you understand system behavior and identify potential security threats.

---

## Automated Maintenance

Automation can significantly reduce the time and effort required for maintenance:

- Cron jobs: Schedule regular tasks like backups or cleanup operations
- Ansible: Automate configuration management across multiple servers
- Watchtower: Automatically update Docker containers when new versions are available

Implementing automated maintenance tasks helps ensure your systems remain up-to-date and running smoothly.

---

# Community and Resources

## Online Communities

The self-hosting community is a valuable resource for knowledge and support:

- Reddit: r/selfhosted, r/homelab, r/docker
- Discord servers: Many projects have dedicated Discord communities
- Forums and mailing lists: Project-specific forums for detailed discussions

Engaging with these communities can provide inspiration, troubleshooting help, and a sense of camaraderie.

---

## Learning Resources

Continuous learning is key to successful self-hosting:

- YouTube tutorials: Channels dedicated to self-hosting and homelab setups
- Online courses: Platforms like Linux Academy and Udemy offer relevant courses
- Documentation and wikis: Official project documentation and community-maintained wikis

Investing time in learning will make your self-hosting journey smoother and more rewarding.

---

## Open-Source Projects

The self-hosting ecosystem is built on open-source software:

- GitHub: The awesome-selfhosted repository is a comprehensive list of self-hostable software
- GitLab: Many self-hosted alternatives are developed and hosted on GitLab
- SourceForge: Another source for open-source self-hosting projects

Contributing to these projects can be a great way to give back to the community and improve the tools you use.

---

# Advanced Topics

## High Availability

For critical services, high availability setups can minimize downtime:

- Load balancing: Distribute traffic across multiple servers
- Failover systems: Automatically switch to backup systems in case of failure
- Clustering: Group multiple servers to work as a single system

Implementing high availability requires careful planning and more complex configurations.

---

## Self-Hosted Email

Running your own email server is one of the most challenging self-hosting projects:

- Challenges: Spam filtering, deliverability, and constant maintenance
- Popular solutions: Mail-in-a-Box, iRedMail, and Mailcow
- Considerations: Requires significant time investment and technical expertise

While difficult, self-hosting email can provide the ultimate control over your communications.

---

# Conclusion

## Is Self-Hosting Right for You?

Consider these factors when deciding to self-host:

- Technical skills and willingness to learn
- Time available for setup and maintenance
- Budget for hardware and ongoing costs
- Desired level of control over your data and services

Self-hosting can be incredibly rewarding, but it's important to understand the commitment involved.

---

## Final Thoughts

Self-hosting is more than just a technical endeavor:

- It's a journey of continuous learning and improvement
- Offers a balance between convenience and control
- Contributes to a more decentralized and privacy-respecting internet

Whether you're just starting or are an experienced self-hoster, there's always something new to explore and learn in this dynamic field.



---

# BONUS!!

## My list of apps

https://is.gd/homelabapps


## Slides without images

https://www.holtzweb.com/homelab-text.md