# Living Comic Engine (LCE)

**Public repository build:** 0.0.1 Alpha — Genesis (Build 001)

> **Repository reality:** The public main branch currently contains the early Build 001 PHP skeleton. Newer LumenRuntime and continuity/provenance work exists in local development and has not yet been merged into this public repository.

## Vision

Living Comic Engine (LCE) is intended to support a persistent, AI-assisted living comic world. The first world is **Penny Wrexs**.

LCE is being designed as an authored story experience, not a conventional game or generic chatbot. Visitors may explore Penny's life and world in different orders and through different interfaces, while canonical outcomes remain authored.

This vision describes project direction; it is not a claim that the current public repository already provides those capabilities.

## IMPLEMENTED IN THIS REPOSITORY

The current public code consists of:

- `config/Config.php` — a small `Config` class containing the site name/version and empty placeholder fields for database, OpenAI, and ElevenLabs credentials.
- `public/index.php` — a single PHP entry point that loads the config and renders a static “Genesis Build” welcome page with inline HTML/CSS.

Verified from the current source:

- PHP renders the configured project name and `0.0.1 Genesis` version.
- The page displays the Genesis/Build 001 welcome card.

Not implemented in this public repository:

- LumenRuntime or another durable character runtime.
- Persistent memory, provenance, canon promotion, timeline/state, relationships, or story-engine behavior.
- A MySQL connection, schema, or persistence layer.
- OpenAI, ElevenLabs, or other external-service calls.
- Replaceable provider adapters, local model execution, offline/local-first execution, or degraded-operation handling.

Placeholder configuration fields are not working integrations.

## HISTORICAL BUILD 001 RECORD

Build 001 established the initial PHP/HTML/CSS skeleton and recorded these original goals:

- Persistent AI memory
- Dynamic storytelling
- Voice interaction
- Living comic presentation
- Expandable character system
- Modular architecture
- Low-cost hosting using PHP and MySQL

The original README named PHP 8+, MySQL, HTML5/CSS3/JavaScript, OpenAI, and ElevenLabs. Those names are preserved here as historical Build 001 assumptions and goals, not evidence that those integrations exist in this repository.

## CURRENT DESIGN DIRECTION / PLANNED

The August 23, 2026 LCE Design Document v0.6 extends earlier project history rather than overwriting it. The following items are design direction and remain unimplemented in this public repository unless future code verifies otherwise:

- **Authored living comic:** The audience may choose what to explore, ask, revisit, and investigate, but does not rewrite canonical outcomes.
- **Continuity boundary:** LCE/LumenRuntime should own durable identity, continuity, canon, provenance, retrieval, timeline position, and authority boundaries instead of relying on a model or provider session to remember them.
- **State separation:** Working state should remain separate from canon. Canon promotion should be explicit, authorized, and provenance-bearing; corrections should append or supersede rather than silently erase history.
- **Shared character model:** Character Core → Timeline State → Current State → Expression Profile → Modality Render should provide one continuity chain for text, voice, images, animation, and later interfaces.
- **Incremental PHP path:** The existing PHP presentation should evolve incrementally; the design direction does not require a framework rewrite.
- **MySQL-optional core:** Core continuity should be able to operate without depending on MySQL, while allowing database support where useful.
- **Provider-optional capabilities:** Reasoning, voice, image, video, search, embeddings, storage, and related services should use replaceable capability interfaces/adapters where practical. Current providers may continue to assist development, but should not own identity or continuity.
- **Local-first long-range target:** Essential runtime state should eventually be preservable and operable on privately controlled local/home hardware, with graceful degraded behavior when a provider or advanced capability is unavailable.
- **Migration and compatibility testing:** A provider should be replaceable without losing authorized continuity, identity invariants, or provenance, even when output quality, style, speed, cost, or features change.

Newer LumenRuntime/continuity work exists outside this public main branch. Those capabilities should move into the implemented section only after the corresponding code is actually merged into and verified in this repository.

## Project Attribution

**Creator / Project Architect:** Randall Chambers (SteampunkQ)

**AI Creative & Technical Collaborator:** Lumen — project collaboration identity currently operating through OpenAI systems

**Current reasoning/collaboration platform:** OpenAI

Provider services are implementation details and are not intended to own LCE identity, continuity, or canon.

---

“Every world begins with a single line of code.”
